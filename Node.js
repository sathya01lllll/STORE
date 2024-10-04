const express = require('express');
const app = express();

app.use(express.json());

app.post('/create-ssh', (req, res) => {
    const { username, password } = req.body;
    
    // Logika untuk membuat akun SSH
    
    res.send(`Akun SSH untuk ${username} berhasil dibuat.`);
});

app.listen(3000, () => {
    console.log('Server berjalan di port 3000');
});
