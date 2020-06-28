const {Router} = require('express');
const mongoController = require('./controllers/mongoController');
const collectionExist = require('./middleware/collectionExist');
const routes = new Router();


routes.post('/schema',collectionExist,mongoController.newSchema);

routes.post('/create',mongoController.store);

routes.get('/list',mongoController.list);

routes.put('/update',mongoController.update);

routes.get('/delete',mongoController.delete);

routes.post('/append',mongoController.append);

routes.post('/alter',mongoController.alter);

routes.post('/drop',mongoController.drop);

routes.post('/select',mongoController.select);


module.exports = routes;