<template>
    <div class="loader-container">
        <div class="loader">
            <div class="cube">
                <div class="face front"></div>
                <div class="face back"></div>
                <div class="face right"></div>
                <div class="face left"></div>
                <div class="face top"></div>
                <div class="face bottom"></div>
            </div>

            <div class="loader-text">
                <span>L</span>
                <span>o</span>
                <span>a</span>
                <span>d</span>
                <span>i</span>
                <span>n</span>
                <span>g</span>
                <span>.</span>
                <span>.</span>
                <span>.</span>
            </div>
        </div>
    </div>
</template>

<script setup>
// No props or additional setup needed
</script>

<style scoped>
.loader-container {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #1a1a2e;
    z-index: 9999;
}

.loader {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 2rem;
}

.cube {
    width: 80px;
    height: 80px;
    transform-style: preserve-3d;
    animation: rotate 3s infinite linear;
}

@keyframes rotate {
    0% {
        transform: rotateX(0deg) rotateY(0deg);
    }

    100% {
        transform: rotateX(360deg) rotateY(360deg);
    }
}

.face {
    position: absolute;
    width: 80px;
    height: 80px;
    background: rgba(157, 78, 221, 0.9);
    border: 2px solid #bd93f9;
    box-shadow: 0 0 10px rgba(189, 147, 249, 0.8);
}

.front {
    transform: translateZ(40px);
}

.back {
    transform: rotateY(180deg) translateZ(40px);
}

.right {
    transform: rotateY(90deg) translateZ(40px);
}

.left {
    transform: rotateY(-90deg) translateZ(40px);
}

.top {
    transform: rotateX(90deg) translateZ(40px);
}

.bottom {
    transform: rotateX(-90deg) translateZ(40px);
}

.loader-text {
    font-size: 1.5rem;
    color: #bd93f9;
    font-family: 'Courier New', monospace;
    letter-spacing: 2px;
}

.loader-text span {
    display: inline-block;
    animation: bounce 0.8s infinite alternate;
}

.loader-text span:nth-child(2) {
    animation-delay: 0.1s;
}

.loader-text span:nth-child(3) {
    animation-delay: 0.2s;
}

.loader-text span:nth-child(4) {
    animation-delay: 0.3s;
}

.loader-text span:nth-child(5) {
    animation-delay: 0.4s;
}

.loader-text span:nth-child(6) {
    animation-delay: 0.5s;
}

.loader-text span:nth-child(7) {
    animation-delay: 0.6s;
}

.loader-text span:nth-child(8) {
    animation-delay: 0.7s;
}

.loader-text span:nth-child(9) {
    animation-delay: 0.8s;
}

.loader-text span:nth-child(10) {
    animation-delay: 0.9s;
}

@keyframes bounce {
    0% {
        transform: translateY(0);
    }

    100% {
        transform: translateY(-10px);
    }
}
</style>