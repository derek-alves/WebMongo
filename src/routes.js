const {Router} = require('express');
const mongoController = require('./controllers/mongoController');
const collectionExist = require('./middleware/collectionExist');
const routes = new Router();


routes.post('/schema',collectionExist,mongoController.newSchema);

routes.post('/create',mongoController.store);

module.exports = routes;