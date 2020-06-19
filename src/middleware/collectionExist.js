module.exports = (req,res,next) => {
  mongoose.connection.db.listCollections().toArray(function (err, names) {
    const result = names.find(item => item.name == user_name);
    console.log(result);
    });
    return next();
}