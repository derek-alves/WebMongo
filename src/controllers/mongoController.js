const mongoose = require('../model/database/connection');
const bodyParser = require('body-parser');
//var schemaa;


class mongoController{
  
    newSchema(req,res){
      const {user_name,schema} = req.body;
       const UserSchema = new mongoose.Schema(schema);
       mongoose.model(user_name,UserSchema);
      res.send(schema);
    }

    store(req,res){
      const {user_name,dados} = req.body;
      const schemaa = mongoose.model(user_name);
      console.log(schemaa);
      console.log(dados);

     const data = new schemaa(dados);
      
      data.save().then(()=>{
          res.status(201).send("Efetuado com sucesso");
      }).catch((err)=>{
          res.status(400).send("Erro ao cadastrar");
      });
    }
}


module.exports = new mongoController();