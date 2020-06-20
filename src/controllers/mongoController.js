const mongoose = require('../model/database/connection');
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
      schemaa.create(dados,(err,result)=>{
        if(err) return res.status(400).send(err);
        else{
          res.status(201).send(result);
        }
      });
      //conexão padrão mongodb
        // const con = mongoose.connection.db.collection(user_name);
      //con.insert()
    }
    list(req, res){
      const {user_name} = req.query;
      const table = mongoose.model(user_name);
      table.find({},(err, data) =>{
        if(err){
          res.send(err);
        }else{
          res.send(data);
        }
    });
    }

    update(req,res){
      const {user_name,data,id} = req.body;
      const table = mongoose.model(user_name);
      table.findByIdAndUpdate((id),data,(err,result)=>{
        if(err){
          res.send(err);
        }else{
          res.send("Alterado com sucesso: " + result);
        }
      })
    }

    delete(req,res){
      const {user_name,id} = req.body;
      const table = mongoose.model(user_name);
      table.findByIdAndDelete((id),(err,result)=>{
        if(err){
          res.send(err);
        }else{
          res.send("deletado com sucesso: " + result);
        }
      })
    }
}



module.exports = new mongoController();