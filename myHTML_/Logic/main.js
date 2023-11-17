const SIDEBAR = document.getElementById('sideBar');
const MINSCROLL = 200;
document.addEventListener('scroll', () => {
    // Define the scroll boundaries

    // Check if the scroll position is within the specified boundaries
    if (window.scrollY >= MINSCROLL)
    {
        SIDEBAR.style.display = 'flex';
    }
    else
    {
        SIDEBAR.style.display = 'none';
    }
  }
);

// whatPage: str
function NavigateToPage(whatPage)
{
    window.location.href = whatPage;
}