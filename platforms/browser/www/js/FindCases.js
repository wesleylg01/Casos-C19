/*  $Ativos      = $linha->Active;
    $confirmados = $linha->Confirmed;
    $mortes      = $linha->Deaths;
    $recuperados = $linha->Recovered;
    $data_casos  = $linha->Date;
*/

function SearchForCasesActive(){     
    const date = new Date()
    date.setDate(date.getDate() - 1);

    const ye = new Intl.DateTimeFormat('en', { year: 'numeric' }).format(date)
    const mo = new Intl.DateTimeFormat('en', { month: '2-digit' }).format(date)
    const da = new Intl.DateTimeFormat('en', { day: '2-digit' }).format(date-2)

    date.setDate(date.getDate() + 1);

    const year = new Intl.DateTimeFormat('en', { year: 'numeric' }).format(date)
    const month = new Intl.DateTimeFormat('en', { month: '2-digit' }).format(date)
    const day = new Intl.DateTimeFormat('en', { day: '2-digit' }).format(date-2)

    const data_from = (`${ye}-${mo}-${da}`)
    const data_to = (`${year}-${month}-${day}`)

    fetch("https://api.covid19api.com/country/Brazil?from="+data_from+"T00:00:00Z&to="+data_to+"T00:00:00Z")
    .then( res => res.json())
    .then ( datas => {
        for (data of datas){
            document.getElementById('Ativos').innerText = data.Active
            const data_referenc = data.Date
            document.getElementById('Data-referencia').innerText = ('Dados referentes a data: '+ data_referenc)
        }        
    })
}

function SearchForCasesConfirmed(){     
    const date = new Date()
    date.setDate(date.getDate() - 1);
    
    const ye = new Intl.DateTimeFormat('en', { year: 'numeric' }).format(date)
    const mo = new Intl.DateTimeFormat('en', { month: '2-digit' }).format(date)
    const da = new Intl.DateTimeFormat('en', { day: '2-digit' }).format(date-2)
    
    date.setDate(date.getDate() + 1);
    
    const year = new Intl.DateTimeFormat('en', { year: 'numeric' }).format(date)
    const month = new Intl.DateTimeFormat('en', { month: '2-digit' }).format(date)
    const day = new Intl.DateTimeFormat('en', { day: '2-digit' }).format(date-2)
    
    const data_from = (`${ye}-${mo}-${da}`)
    const data_to = (`${year}-${month}-${day}`)
    
    fetch("https://api.covid19api.com/country/Brazil?from="+data_from+"T00:00:00Z&to="+data_to+"T00:00:00Z")
    .then( res => res.json())
    .then ( datas => {
        for (data of datas){
            document.getElementById('Confirmados').innerText = data.Confirmed
            const data_referenc = data.Date
            document.getElementById('Data-referencia').innerText = ('Dados referentes a data: '+ data_referenc)
        }        
    })
}


function SearchForCasesDeaths(){     
    const date = new Date()
    date.setDate(date.getDate() - 1);
    
    const ye = new Intl.DateTimeFormat('en', { year: 'numeric' }).format(date)
    const mo = new Intl.DateTimeFormat('en', { month: '2-digit' }).format(date)
    const da = new Intl.DateTimeFormat('en', { day: '2-digit' }).format(date-2)
    
    date.setDate(date.getDate() + 1);
    
    const year = new Intl.DateTimeFormat('en', { year: 'numeric' }).format(date)
    const month = new Intl.DateTimeFormat('en', { month: '2-digit' }).format(date)
    const day = new Intl.DateTimeFormat('en', { day: '2-digit' }).format(date-2)
    
    const data_from = (`${ye}-${mo}-${da}`)
    const data_to = (`${year}-${month}-${day}`)
    
    fetch("https://api.covid19api.com/country/Brazil?from="+data_from+"T00:00:00Z&to="+data_to+"T00:00:00Z")
    .then( res => res.json())
    .then ( datas => {
        for (data of datas){
            document.getElementById('Mortes').innerText = data.Deaths
            const data_referenc = data.Date
            document.getElementById('Data-referencia').innerText = ('Dados referentes a data: '+ data_referenc)
        }        
    })
}