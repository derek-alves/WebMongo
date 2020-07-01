const {Router} = require('express');
const mongoController = require('./controllers/mongoController');
const collectionExist = require('./middleware/collectionExist');
const routes = new Router();


routes.post('/schema',collectionExist,mongoController.newSchema);

routes.post('/create',mongoController.store);

routes.post('/list',mongoController.list);

routes.put('/update',mongoController.update);

routes.delete('/delete',mongoController.delete);

routes.post('/alter',mongoController.alter);


module.exports = routes;