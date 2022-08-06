exports.todayDate = (format = null) =>{
    var date = new Date();
    if(format == null){
        return `${date.getFullYear()}-${date.getMonth()}-${date.getDate()}`;
    }
}