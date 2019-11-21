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


// let pola2 = function(a){
//     let p ='';
//     // let arr = [10,14,30,34];
//     for (let x = 0; x < a; x++) {
//         for (let y = 0; y < a; y++) {
//            if ((x%2==0 && y%2==1)) {
//             // (y%2==0 && x%2==1)||
//                p+='* ';
//            }else if((x==1&&y==0)||
//                     (x==1&&y==4)||
//                     (x==3&&y==0)||
//                     (x==3&&y==4)){
//                         p+='* ';
//            }else{
//                p+='= ';
//            }

//         }
//         p+='\n';
//     }
//     console.log(p);
// }

// pola2(5);