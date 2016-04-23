<style>
    .donate {
        width: 100%;
        height: 50px;
        overflow: hidden;
        position: relative;
        border: 2px solid grey;
        border-radius: 5px;
    }
    .donate .background {
        width: 100%;
        height: 100%;
        background-color: #9ccff4;
        position: absolute;
        z-index: 0;
    }
    .donate .meter {
        position: absolute;
        height: 100%;
        width: 50%;
        background-color: green;
        z-index: 50;
    }
    .donate .foreground {
        width: 100%;
        height: 100%;
        background-image: url(/images/shared/meter-overlay.png);
        background-size: 100% 100%;
        position: absolute;
        z-index: 100;
    }
</style>
<div id="donate" class="donate">
    <div class="background"></div>
    <div class="meter"></div>
    <div class="foreground"></div>
</div>
