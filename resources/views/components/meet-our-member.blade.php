<section>
    <div class="swiper-container meet-our-team">
        <div class="heading">
            <h1>Meet Our Team</h1>
            <hr>
        </div>
        <div class="swiper-wrapper">
            <div class="swiper-slide item">
                <div class="image">
                    <img src="/img/John T Lord.png" alt="">
                </div>
                <div class="icons">
                    <div class="icon-img">
                        <img src="/img/f.png" alt="">
                    </div>
                    <div class="icon-img">
                        <img src="/img/link-in.png" alt="">
                    </div>
                </div>
                <div class="role">
                    <p>John T.Lord</p>
                    <p>CEO Founder</p>
                </div>
            </div>
            <div class="swiper-slide item">
                <div class="image">
                    <img src="/img/John T Lord.png" alt="">
                </div>
                <div class="icons">
                    <div class="icon-img">
                        <img src="/img/f.png" alt="">
                    </div>
                    <div class="icon-img">
                        <img src="/img/link-in.png" alt="">
                    </div>
                </div>
                <div class="role">
                    <p>John T.Lord</p>
                    <p>CEO Founder</p>
                </div>
            </div>
            <div class="swiper-slide item">
                <div class="image">
                    <img src="/img/John T Lord.png" alt="">
                </div>
                <div class="icons">
                    <div class="icon-img">
                        <img src="/img/f.png" alt="">
                    </div>
                    <div class="icon-img">
                        <img src="/img/link-in.png" alt="">
                    </div>
                </div>
                <div class="role">
                    <p>John T.Lord</p>
                    <p>CEO Founder</p>
                </div>
            </div>
            <div class="swiper-slide item">
                <div class="image">
                    <img src="/img/John T Lord.png" alt="">
                </div>
                <div class="icons">
                    <div class="icon-img">
                        <img src="/img/f.png" alt="">
                    </div>
                    <div class="icon-img">
                        <img src="/img/link-in.png" alt="">
                    </div>
                </div>
                <div class="role">
                    <p>John T.Lord</p>
                    <p>CEO Founder</p>
                </div>
            </div>
            <div class="swiper-slide item">
                <div class="image">
                    <img src="/img/John T Lord.png" alt="">
                </div>
                <div class="icons">
                    <div class="icon-img">
                        <img src="/img/f.png" alt="">
                    </div>
                    <div class="icon-img">
                        <img src="/img/link-in.png" alt="">
                    </div>
                </div>
                <div class="role">
                    <p>John T.Lord</p>
                    <p>CEO Founder</p>
                </div>
            </div>
            <div class="swiper-slide item">
                <div class="image">
                    <img src="/img/John T Lord.png" alt="">
                </div>
                <div class="icons">
                    <div class="icon-img">
                        <img src="/img/f.png" alt="">
                    </div>
                    <div class="icon-img">
                        <img src="/img/link-in.png" alt="">
                    </div>
                </div>
                <div class="role">
                    <p>John T.Lord</p>
                    <p>CEO Founder</p>
                </div>
            </div>
            <div class="swiper-slide item">
                <div class="image">
                    <img src="/img/John T Lord.png" alt="">
                </div>
                <div class="icons">
                    <div class="icon-img">
                        <img src="/img/f.png" alt="">
                    </div>
                    <div class="icon-img">
                        <img src="/img/link-in.png" alt="">
                    </div>
                </div>
                <div class="role">
                    <p>John T.Lord</p>
                    <p>CEO Founder</p>
                </div>
            </div>
            <div class="swiper-slide item">
                <div class="image">
                    <img src="/img/John T Lord.png" alt="">
                </div>
                <div class="icons">
                    <div class="icon-img">
                        <img src="/img/f.png" alt="">
                    </div>
                    <div class="icon-img">
                        <img src="/img/link-in.png" alt="">
                    </div>
                </div>
                <div class="role">
                    <p>John T.Lord</p>
                    <p>CEO Founder</p>
                </div>
            </div>
        </div>
        <div class="pagination">
            <div class="pagination-1 active" id="pagination_1"></div>
            <div class="pagination-2 disable" id="pagination_2"></div>
        </div>
        <div class="swiper-button-next" id="next"></div>
        <div class="swiper-button-prev hide-arrow" id="prev"></div>
    </div>
</section>

<script>
    var count = 0;
    var next = document.getElementById("next");
    var prev = document.getElementById("prev");
    var pagination_1 = document.getElementById("pagination_1");
    var pagination_2 = document.getElementById("pagination_2");
    next.onclick= function(){
        count++;
        if(count== 1){
            prev.classList.remove("hide-arrow");
        }
        if(count == 4){
            console.log("next");
            pagination_1.classList.remove("active");
            pagination_1.classList.add("disable");
            pagination_2.classList.remove("disable");
            pagination_2.classList.add("active");
            next.classList.add("hide-arrow");
        }
    }
    prev.onclick= function(){
        count--;
        if(count==3){
            next.classList.remove("hide-arrow");
        }
        if(count == 0){
            console.log("prev");
            pagination_2.classList.remove("active");
            pagination_2.classList.add("disable");
            pagination_1.classList.remove("disable");
            pagination_1.classList.add("active");
            prev.classList.add("hide-arrow"); 
        }
    }
</script>