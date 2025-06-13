import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';

// Mendapatkan __filename dan __dirname di ES Module
const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

// Define the root directory of the project
const projectDir = __dirname;

// Fungsi untuk membaca semua file secara rekursif
function readFiles(dir) {
  const files = fs.readdirSync(dir);
  files.forEach(file => {
    const filePath = path.join(dir, file);
    const stat = fs.statSync(filePath);

    if (stat.isDirectory()) {
      console.log(`Directory: ${filePath}`);
      readFiles(filePath);
    } else {
      console.log(`File: ${filePath}`);

      // Baca file, tapi jika ukuran file terlalu besar, jangan tampilkan isi
      if (stat.size > 1024 * 100) { // lebih dari 100 KB
        console.log('[File too large to display]');
        return;
      }

      const content = fs.readFileSync(filePath, 'utf-8');

      // Jika file sensitif, jangan tampilkan isinya secara penuh
      if (
        filePath.endsWith('.env') ||
        filePath.endsWith('.config') ||
        content.toLowerCase().includes('password') ||
        content.toLowerCase().includes('secret') ||
        content.toLowerCase().includes('token')
      ) {
        console.warn(`Sensitive file detected: ${filePath}`);
        console.warn(`[Content not displayed for security reasons]\n`);
      } else {
        console.log(`Content:\n${content}\n`);
      }
    }
  });
}

// Mulai debugging dari direktori project
console.log(`Debugging project files in: ${projectDir}`);
readFiles(projectDir);
