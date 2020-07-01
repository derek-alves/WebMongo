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
      const schemaa = mongoose.model(user_name);
      schemaa.create(dados,(err,result)=>{
        if(err) return res.status(400).send(err);
        else{
          res.status(201).send(result);
        }
      });

    }
    list(req, res){
      const {user_name} = req.body
      const Table = mongoose.model(user_name)
      Table.find().then((datas) => {
        res.send(datas)
      })
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
      table.findOneAndDelete((id),(err,result)=>{
        if(err){
          res.send(err);
        }else{
          res.send(result);
        }
      })
    }

    alter(req, res){
      const {user_name, id, dados} = req.body
      const Table = mongoose.model(user_name)
      Table.findByIdAndUpdate({_id: id}, dados).then(()=>{
          res.send(true)
      }).catch(() => {
        res.send(false)
      })   
    }
}



module.exports = new mongoController();