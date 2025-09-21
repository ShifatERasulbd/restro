// Category Items Page Custom JS

document.addEventListener('DOMContentLoaded', function() {
  const cardTabs = document.querySelectorAll('.category-card-tab');
  // Remove all active-card classes on load
  cardTabs.forEach(t => t.classList.remove('active-card'));
  // Set only the correct one as active on load
  const activeId = document.body.getAttribute('data-active-category-id');
  if(activeId) {
    const activeTab = document.getElementById('tab-' + activeId);
    if(activeTab) activeTab.classList.add('active-card');
  } else if(cardTabs.length > 0) {
    cardTabs[0].classList.add('active-card');
  }
  // Tab click handler
  cardTabs.forEach(tab => {
    tab.addEventListener('click', function() {
      cardTabs.forEach(t => t.classList.remove('active-card'));
      tab.classList.add('active-card');
      // Activate tab pane
      const target = tab.getAttribute('data-bs-target');
      document.querySelectorAll('.tab-pane').forEach(pane => pane.classList.remove('show', 'active'));
      const pane = document.querySelector(target);
      if (pane) {
        pane.classList.add('show', 'active');
      }
    });
  });
});
