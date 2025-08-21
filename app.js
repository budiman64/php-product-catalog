document.addEventListener('DOMContentLoaded', () => {
  // Select ALL buttons with the class '.add-to-cart-btn'
  const addToCartButtons = document.querySelectorAll('.add-to-cart-btn')

  // Loop through each button that was found
  addToCartButtons.forEach((button) => {
    // Add a click event listener to each one
    button.addEventListener('click', () => {
      // Find the closest '.product-card' parent of the SPECIFIC button that was clicked
      const productCard = button.closest('.product-card')

      // Extract data from that card's data-* attributes
      const productData = {
        id: productCard.dataset.productId,
        name: productCard.dataset.productName,
        price: parseFloat(productCard.dataset.price),
      }

      // Ensure the dataLayer exists
      window.dataLayer = window.dataLayer || []

      // Push the tracking event with the specific product's data
      window.dataLayer.push({
        event: 'add_to_cart',
        ecommerce: {
          currency: 'MYR',
          value: productData.price,
          items: [
            {
              item_id: productData.id,
              item_name: productData.name,
              price: productData.price,
              quantity: 1,
            },
          ],
        },
      })

      console.log(
        `🛒 Added '${productData.name}' to cart. Event pushed to dataLayer.`
      )
      alert(`${productData.name} added to cart! Check the console.`)
    })
  })
})
