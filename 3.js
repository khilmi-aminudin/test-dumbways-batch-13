let pola = function(x){
    let p  = '';
    for(let n = 0; n < x; n++) {
       if(n%2==0){
            p +='= * = * =';
       }else{
           p+='* = = = *';
       }
        p+='\n';
    }
    
    console.log(p);
}


pola(prompt('Masukan banyak baris'));