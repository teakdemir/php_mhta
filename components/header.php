<link rel="stylesheet" href="./index.css">
<link rel="stylesheet" href="./styles/header/header.css">

<div class="header-wrapper">
    <div class="header">
        <div class="logo-container">
            <a href="./">
                <img src="./assets/brand/logo.svg" alt="">
            </a>
            <p><span>Premium'u</span> keşfet</p>
        </div>

        <div class="header-functions">
            <div class="links">
                <a href="">Siparişlerim</a>
                <a href="">Süper Fiyat, Süper Teklif</a>
                <a href="">Yurt Dışından</a>
                <a href="">Kampanyalar</a>
                <a href=""><span>Girişimci Kadınlar</span></a>
                <a href="">Müşteri Hizmetleri</a>
                <a href=""><span>Hepsiburada Premium</span></a>
                <a href="">Hepsiburada'da Satıcı Ol</a>
            </div>
            <div class="other">
                <form class="search" action="./" method="GET"> <!-- Search function -->
                    <img id="accent" src="./assets/brand/accent.svg" alt="">
                    <div class="search-icon-wrapper">
                        <img src="./assets/icons/search.svg">
                    </div>
                    <input type="search" name="s" placeholder="Ürün, kategori veya marka ara" />
                </form>
                <div class="location">
                    <img id="location-icon" src="./assets/icons/location.svg" alt="">
                    <div class="outer-wrapper">
                        <p id="location-button-title">Konum</p>
                        <div class="inner-wrapper">
                            <p id="location-button">Ankara</p>
                            <img id="chevron" src="./assets/icons/chevron_down.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="my-account">
                    <img id="account-icon" src="./assets/icons/account.svg" alt="">
                    <div class="outer-wrapper">
                        <div class="inner-wrapper" id="account-content">
                            <!-- JS ile doldurulacak -->
                        </div>
                    </div>
                    <img id="chevron" src="./assets/icons/chevron_account.svg" alt="">
                </div>
                <a href="./pages/cart.php" class="cart">
                    <img id="cart-icon" src="./assets/icons/cart.svg" alt="">
                    <p id="cart-text">Sepetim</p>
                </a>
            </div>
        </div>
    </div>
    <img id="bottom-accent" src="./assets/brand/accent.svg" alt="">
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const accountContent = document.getElementById('account-content');
    const username = sessionStorage.getItem('username');
    if (username) {
        
        accountContent.innerHTML = `
            <div style="display: flex; flex-direction: column; align-items: flex-start;">
                <span id="account-button" style="margin-bottom: 5px;">${username}</span>
                <a href="#" id="logout-link">Çıkış Yap</a>
            </div>
        `;

        const logoutLink = document.getElementById('logout-link');
        logoutLink.addEventListener('click', () => {
            
            sessionStorage.removeItem('user_id');
            sessionStorage.removeItem('username');
            
            window.location.reload();
        });
    } else {
        
        accountContent.innerHTML = `
            <a href="./pages/login.php" id="account-button">Giriş Yap</a>
        `;
    }
});
</script>
