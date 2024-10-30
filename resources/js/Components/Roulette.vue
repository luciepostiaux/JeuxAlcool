<script setup>
import { ref, computed } from "vue";

// Recevoir les jeux en tant que prop
const { games } = defineProps(["games"]);

const selectedGame = ref(null);
const isSpinning = ref(false);
const rotationDegrees = ref(0);

// Initialiser selectedGames avec tous les jeux dès le chargement
const selectedGames = ref([...games]);

// Fonction pour basculer la sélection d'un jeu
function toggleGameSelection(game) {
    const index = selectedGames.value.findIndex((g) => g.name === game.name);
    if (index > -1) {
        // Le jeu est déjà sélectionné, on le retire
        selectedGames.value.splice(index, 1);
    } else {
        // Le jeu n'est pas sélectionné, on l'ajoute
        selectedGames.value.push(game);
    }
}

// Fonction pour sélectionner tous les jeux
function selectAllGames() {
    selectedGames.value = [...games];
}

// Fonction pour désélectionner tous les jeux
function deselectAllGames() {
    selectedGames.value = [];
}

// Fonction pour lancer la roulette
function spinRoulette() {
    if (selectedGames.value.length === 0) {
        alert("Veuillez sélectionner au moins un jeu.");
        return;
    }
    isSpinning.value = true;
    selectedGame.value = null;

    // Générer une rotation aléatoire pour s'arrêter sur un jeu différent
    const spins = 5; // Nombre de tours complets
    const randomStop = Math.floor(Math.random() * 360); // Angle aléatoire
    rotationDegrees.value += spins * 360 + randomStop;

    // Fin de l'animation après 4 secondes
    setTimeout(() => {
        isSpinning.value = false;
        const normalizedDegrees = ((rotationDegrees.value % 360) + 360) % 360; // S'assurer que l'angle est positif

        // Ajuster pour la position du pointeur à -90 degrés (haut de la roue)
        const adjustedDegrees = (normalizedDegrees + 90) % 360;

        const gameIndex =
            Math.floor((adjustedDegrees / 360) * selectedGames.value.length) %
            selectedGames.value.length; // S'assurer que l'index est dans les limites
        selectedGame.value = selectedGames.value[gameIndex];
    }, 4000);
}

// Styles dynamiques pour la roue
const wheelStyles = computed(() => ({
    transform: `rotate(${rotationDegrees.value}deg)`,
    transition: isSpinning.value
        ? "transform 4s cubic-bezier(0.33, 1, 0.68, 1)"
        : "none",
}));

// Calculer les styles des éléments en fonction de leur position angulaire
const getItemStyle = (index) => {
    const angle = (360 / selectedGames.value.length) * index - 90; // Ajuster de -90 degrés
    return {
        transform: `rotate(${angle}deg) translate(0, -50%)`,
        "transform-origin": "0 0",
    };
};
</script>

<template>
    <div class="flex flex-col items-center">
        <div class="flex flex-col md:flex-row items-start">
            <!-- Roulette -->
            <div class="relative md:mr-8 mb-4 md:mb-0">
                <!-- Indicateur -->
                <div
                    class="absolute top-0 left-1/2 transform -translate-x-1/2 z-10"
                >
                    <svg
                        width="24"
                        height="24"
                        fill="currentColor"
                        class="text-red-500"
                    >
                        <polygon points="12,0 24,24 0,24" />
                    </svg>
                </div>
                <!-- Roue -->
                <div
                    class="relative flex items-center justify-center overflow-hidden rounded-full border-[5px] border-gray-300 w-72 h-72 md:w-80 md:h-80"
                    :style="wheelStyles"
                >
                    <div
                        v-for="(game, index) in selectedGames"
                        :key="index"
                        class="absolute top-1/2 left-1/2 w-24 h-8 bg-gray-100 text-gray-800 text-sm font-bold text-center leading-8 rounded-md"
                        :style="getItemStyle(index)"
                    >
                        {{ game.name }}
                    </div>
                </div>
            </div>

            <!-- Liste des jeux avec cases à cocher -->
            <div class="md:ml-8">
                <h2
                    class="text-lg font-bold mb-2 text-gray-800 dark:text-white"
                >
                    Liste des jeux :
                </h2>
                <!-- Boutons pour sélectionner/désélectionner tous les jeux -->
                <div class="mb-4">
                    <button
                        @click="selectAllGames"
                        class="bg-blue-500 text-white px-3 py-1 rounded mr-2"
                    >
                        Tout sélectionner
                    </button>
                    <button
                        @click="deselectAllGames"
                        class="bg-red-500 text-white px-3 py-1 rounded"
                    >
                        Tout désélectionner
                    </button>
                </div>
                <div class="grid grid-cols-2 gap-2">
                    <div
                        v-for="(game, index) in games"
                        :key="index"
                        class="flex items-center"
                    >
                        <input
                            type="checkbox"
                            :id="`game-${index}`"
                            class="mr-2"
                            :checked="
                                selectedGames.some((g) => g.name === game.name)
                            "
                            @change="toggleGameSelection(game)"
                        />
                        <label
                            :for="`game-${index}`"
                            class="text-gray-800 dark:text-white"
                        >
                            {{ game.name }}
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <button
            @click="spinRoulette"
            class="mt-5 py-2.5 px-5 bg-[#007bff] text-white rounded-md cursor-pointer hover:bg-[#0056b3]"
            aria-label="Lancer la roulette"
        >
            Lancer la roulette
        </button>
        <div v-if="selectedGame" class="mt-5 text-center font-bold text-white">
            <h2>Jeu sélectionné :</h2>
            <p>{{ selectedGame.name }}</p>
        </div>
    </div>
</template>
