import { Router } from 'express';
import { ExampleController } from '../controllers/index';

const router = Router();

// Define routes
router.get('/example', ExampleController.getExample);
router.post('/example', ExampleController.createExample);

// Add more routes as needed

export default (app) => {
    app.use('/api', router);
};