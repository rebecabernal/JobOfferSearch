function makeTableHyperlink (){
    const rows = document.querySelectorAll('.row');
    rows.forEach(row =>row.addEventListener('click', function(){
        window.open(this.dataset.href,'_blank');
    }));
}

makeTableHyperlink();