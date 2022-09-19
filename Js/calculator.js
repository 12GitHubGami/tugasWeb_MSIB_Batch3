function hitung(tombol){
    //tangkap id form
    var frm = document.getElementById('calcForm');
    
    var a1 = parseFloat(frm.angka1.value);
    var a2 = parseFloat(frm.angka2.value);

    
    if (isNaN(a1) || isNaN(a2)) {
        alert("Harap Masukkan angka!!");
        } else {
    switch(tombol) {
        case 'tambah':
            var total = a1 + a2;
            frm.hasil.value = total;
        break;
        case 'kurang':
            var total = a1 - a2;
            frm.hasil.value = total;
        break;
        case 'kali':
            var total = a1 * a2;
            frm.hasil.value = total;
        break;
        case 'bagi':
            var total = a1 / a2;
            frm.hasil.value = total;
        break;
        case 'pangkat':
            var total = Math.pow(a1,a2)
            frm.hasil.value = total;
        break;
        default:
            alert("Operator tidak valid!!");
        break;
        }
    }
}
