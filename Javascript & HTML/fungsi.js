var dataBarang = [
    "Buku Tulis",
    "Pensil",
    "Spidol"
];


function showBarang(){
    var listBarang = document.getElementById("list-barang");
    listBarang.innerHTML = "";

    for(let i = 0; i < dataBarang.length; i++){
        var Edit = "<a href='#' onclick='editBarang("+i+")'>Edit</a>";
        var Hapus = "<a href='#' onclick='hapusBarang("+i+")'>Hapus</a>";

        listBarang.innerHTML += "<li>" + dataBarang[i] + " ["+ Edit + " | "+ Hapus +"]</li>";        
    }
}

function tambahBarang(){
    var input = document.querySelector("input[name=barang]");
    dataBarang.push(input.value);
    showBarang();
}

function editBarang(id){
    var barangBaru = prompt("Nama baru", dataBarang[id]);
    dataBarang[id] = barangBaru;
    showBarang();
}

function hapusBarang(id){
    dataBarang.splice(id, 1);
    showBarang();
}

showBarang();