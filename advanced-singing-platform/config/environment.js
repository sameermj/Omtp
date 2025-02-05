module.exports = {
    NODE_ENV: process.env.NODE_ENV || 'development',
    PORT: process.env.PORT || 3000,
    DATABASE_URL: process.env.DATABASE_URL || 'mysql://user:password@localhost:3306/advanced_singing_platform',
    JWT_SECRET: process.env.JWT_SECRET || 'your_jwt_secret',
    API_KEY: process.env.API_KEY || 'your_api_key',
    CORS_ORIGIN: process.env.CORS_ORIGIN || '*',
    SSL_ENABLED: process.env.SSL_ENABLED || false,
    LOG_LEVEL: process.env.LOG_LEVEL || 'info',
};