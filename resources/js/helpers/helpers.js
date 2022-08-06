export function cropText (text,strlength = 8){
    if(text.length > strlength){
        return text.slice(0, strlength)+'..';
    }else{
        return text;
    }
}

 