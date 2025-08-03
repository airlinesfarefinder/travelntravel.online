<!-- top-banner.html -->

<style>
  body {
    margin: 0;
    font-family: Arial, sans-serif;
  }

  .top-banner {
    position: sticky;
    top: 0;
    left: 0;
    right: 0;
    min-height:30px;
    background-color: #000000;
    color: #fff;
    overflow: hidden;
    z-index: 1000;
    display: flex;
    align-items: center;
    cursor: pointer;
  }

  .scrolling-text {
    display: inline-block;
    white-space: nowrap;
    padding-left: 100%;
    animation: scroll-left 25s linear infinite ;

  }

  @keyframes scroll-left {
    from {
      transform: translateX(0%);
    }

    to {
      transform: translateX(-100%);
    }
  }

  .support-info {
    display: inline-flex;
    align-items: center;
    font-size: 14px;
        color:#ffffff;
  }

  .support-info img {
    height: 20px;
    width: 20px;
    margin-right: 5px;
    filter: invert(1);
  }
</style>


 <a href="tel:(888) 676-4248">
<div class="top-banner">
 
  <div class="scrolling-text">
    <div class="support-info">
      <img src="./assets/img/phone.png" alt="Support Icon" />
      Customer Support: (888) 676-4248 &nbsp;&nbsp;&nbsp;
      <img src="./assets/img/phone.png" alt="Support Icon" />
      Customer Support: (888) 676-4248 &nbsp;&nbsp;&nbsp;
    </div>
  </div>

</div>
  </a>
