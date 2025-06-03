const sqlite3 = require('sqlite3').verbose();
const db = new sqlite3.Database('./chat.db');

db.serialize(() => {
  db.run(`
    CREATE TABLE IF NOT EXISTS messages (
      id INTEGER PRIMARY KEY AUTOINCREMENT,
      user TEXT,
      avatarSeed TEXT,
      message TEXT,
      timestamp TEXT
    )
  `);
});

module.exports = {
  insertMessage: ({ user, avatarSeed, message, timestamp }) => {
    db.run(
      `INSERT INTO messages (user, avatarSeed, message, timestamp) VALUES (?, ?, ?, ?)`,
      [user, avatarSeed, message, timestamp]
    );
  },
  getAllMessages: (callback) => {
    db.all(
      `SELECT user, avatarSeed, message, timestamp FROM messages ORDER BY id ASC`,
      (err, rows) => {
        if (err) return console.error(err);
        callback(rows);
      }
    );
  }
};
