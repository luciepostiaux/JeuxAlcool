<script setup>
import { ref, computed } from "vue";

const props = defineProps({
    value: String,
    color: String,
    symbol: String,
});

const isFlipped = ref(false);

// Importation dynamique des images
const images = import.meta.globEager("../../images/cards/*.svg");

const cardImage = computed(() => {
    const imageName = `${props.symbol}_${props.value}.svg`;
    const imagePath = `../../images/cards/${imageName}`;
    const image = images[imagePath];
    if (image) {
        return image.default;
    } else {
        console.error(`Image not found: ${imagePath}`);
        return "";
    }
});

function flipCard() {
    isFlipped.value = !isFlipped.value;
}
</script>

<!-- resources/js/components/Card.vue -->
<template>
    <div class="card" :class="{ flipped: isFlipped }" @click="flipCard">
        <img :src="cardImage" alt="Carte" />
    </div>
</template>
