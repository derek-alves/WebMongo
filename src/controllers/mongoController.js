const mongoose = require('../model/database/connection');

class mongoController{

    newSchema(req,res){
      const {user_name,schema} = req.body;
       const UserSchema = new mongoose.Schema(schema);
        mongoose.model(user_name,UserSchema);
      res.send(schema);
    }

    store(req,res){
      const {user_name,dados} = req.body;
      var schemaa = mongoose.model(user_name);
      new schemaa(dados).save().then(()=>{
          res.status(201).send("Efetuado com sucesso");
      }).catch((err)=>{
          res.status(400).send("Erro ao cadastrar:");
      });
    }
}


module.exports = new mongoController();