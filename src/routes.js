const {Router} = require('express');
const mongoController = require('./controllers/mongoController');
const collectionExist = require('./middleware/collectionExist');
const routes = new Router();


routes.post('/schema',collectionExist,mongoController.newSchema);

routes.post('/create',mongoController.store);

routes.get('/lister',mongoController.lister);

routes.post('/creates',mongoController.creates);

module.exports = routes;