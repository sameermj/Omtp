const mysql = require('mysql');

const dbConfig = {
    host: process.env.DB_HOST || 'localhost',
    user: process.env.DB_USER || 'root',
    password: process.env.DB_PASSWORD || '',
    database: process.env.DB_NAME || 'advanced_singing_platform',
    port: process.env.DB_PORT || 3306,
};

const connection = mysql.createConnection(dbConfig);

connection.connect((err) => {
    if (err) {
        console.error('Error connecting to the database:', err.stack);
        return;
    }
    console.log('Connected to the database as id ' + connection.threadId);
});

module.exports = connection;