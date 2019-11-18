let dwMall = function(voucher,uang){
    var b;
    if (voucher=='DWA' && uang>=20000) {
            b   = uang * 0.5;
            b   = b <= b; 
            if (b){b = 20000;}
            d       = '50%';
            bayar   = uang - b;
    }else if(voucher=='DWM' && uang>=50000){
        b   = uang * 0.3;
        b   = b <= b; 
        if (b){b = 40000;}
        d       = '30%';
        bayar   = uang - b;
    }else{
        b   = uang;
        d       = '-';
    }
    console.log('Total Belanja      : '+uang);
    console.log('Kode Promo         : '+voucher);
    console.log('Diskon             : '+d)
    console.log('Besaran Diskon     : '+b)
    console.log('Total Bayar        : '+bayar)

}

let k = prompt('Voucher Anda'),
    u = prompt('Harga Barang');

    dwMall(k,u);
    