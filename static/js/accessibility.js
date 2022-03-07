const accessButton = document.getElementById('accessibility');
const tips = document.getElementsByClassName('tools');
const tooltipsList = []
for (let i = 0; i < tips.length; i++) {
    const element = tips[i];
    tooltipsList.push(element.title);
    element.removeAttribute('title');
    
}

accessButton.addEventListener('click', () => {       
    for (let i = 0; i < tips.length; i++) {
        const element = tips[i];
        if (element.hasAttribute('title')) {
            accessButton.innerText = "Accessibilité off"
            element.removeAttribute('title');
        } else{
            accessButton.innerText = "Accessibilité on"
            element.setAttribute('title', tooltipsList[element.id]);
        }

    }
                
})
    



