module.exports = {
    cors: {
        origin: ['https://yourdomain.com', 'https://anothertrusteddomain.com'],
        methods: ['GET', 'POST', 'PUT', 'DELETE'],
        allowedHeaders: ['Content-Type', 'Authorization'],
        credentials: true,
    },
    rateLimit: {
        windowMs: 15 * 60 * 1000, // 15 minutes
        max: 100, // Limit each IP to 100 requests per windowMs
    },
    helmet: {
        contentSecurityPolicy: {
            directives: {
                defaultSrc: ["'self'"],
                scriptSrc: ["'self'", "'unsafe-inline'", "'unsafe-eval'"],
                styleSrc: ["'self'", "'unsafe-inline'"],
                imgSrc: ["'self'", 'data:', 'https:'],
            },
        },
    },
    session: {
        secret: 'yourSecretKey',
        resave: false,
        saveUninitialized: true,
        cookie: {
            secure: true,
            httpOnly: true,
            maxAge: 24 * 60 * 60 * 1000, // 24 hours
        },
    },
    jwt: {
        secret: 'yourJWTSecretKey',
        expiresIn: '1h',
    },
};