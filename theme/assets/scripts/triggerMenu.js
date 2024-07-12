export default function triggerMenu() {
  const toggleButton = document.getElementById('toggleButton')
  const cardContainer = document.getElementById('cardContainer')
  const closeButton = document.getElementById('closeButton')
  console.log("start triggr menu");
  toggleButton.addEventListener('click', () => {
    console.log("click triggr menu");
    cardContainer.style.width = cardContainer.style.width === '350px' ? '0' : '350px'
  })

  closeButton.addEventListener('click', () => {
    cardContainer.style.width = '0'
  })

}

