const product=[
    {
        id: 0,
        image: 'assets/img/img1.png',
        title: 'beginner workout plan',
        description: 'not recommended for those with heart problems'
    },
    {
        id: 1,
        image: 'assets/img/img1.png',
        title: 'standard workout plan',
        description:'not recommended for those with heart problems'
    },
    {
        id: 2,
        image: 'assets/img/img1.png',
        title: 'Advance workout plan',
        description: 'not recommended for those with heart problems'
    },
    {
        id: 3,
        image: 'assets/img/img1.png',
        title: 'Expert workout plan',
        description: 'not recommended for those with heart problems'
    },
]
const categories = [...new Set(product.map((item)=>{return item}))]

document.getElementById('searchBar').addEventListener('keyup', (e)=>{
    const searchData = e.target.value.toLowerCase();
    const filterData = categories.filter((item)=> {
        return(
            item.title.toLocaleLowerCase().includes(searchData)
        )
    })
    displayItem(filterData)
});

const displayItem = (items) =>{
    document.getElementById('root').innerHTML=items.map((item)=>{
        var {id, image, title, description} = item;
        if(id == 0){
            return(
                `<div class='box'>
                    <div class='img-box'>
                        <img class='images' src=${image}></img>
                    </div>
                    <div class='bottom'>
                        <p>${title}</p>
                        <h2>${description}</h2>
                        <button onclick="location.href='beginnerSession.html'">Start Session</button>
                    </div>
                </div>`
            )
        }
        else if (id == 1) {
            return(
                `<div class='box'>
                    <div class='img-box'>
                        <img class='images' src=${image}></img>
                    </div>
                    <div class='bottom'>
                        <p>${title}</p>
                        <h2>${description}</h2>
                        <button onclick="location.href='StandardSession.html'">Start Session</button>
                    </div>
                </div>`
            )
        } 
        else if (id == 2) {
            return(
                `<div class='box'>
                    <div class='img-box'>
                        <img class='images' src=${image}></img>
                    </div>
                    <div class='bottom'>
                        <p>${title}</p>
                        <h2>${description}</h2>
                        <button onclick="location.href='AdvanceSession.html'">Start Session</button>
                    </div>
                </div>`
            )
        } 
        else if (id == 3) {
            return(
                `<div class='box'>
                    <div class='img-box'>
                        <img class='images' src=${image}></img>
                    </div>
                    <div class='bottom'>
                        <p>${title}</p>
                        <h2>${description}</h2>
                        <button onclick="location.href='ExpertSession.html'">Start Session</button>
                    </div>
                </div>`
            )
        } 
    }).join('')
};
displayItem(categories);


let play = document.getElementById("music1");

function playMusic() {
    
}