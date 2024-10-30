<script setup>
import { Head } from "@inertiajs/vue3";
import NavBar from "@/Components/NavBar.vue";
import { ref } from "vue";
import axios from "axios";

defineProps({
    auth: Object,
    canLogin: Boolean,
    canRegister: Boolean,
    games: Array,
});

// Créer une variable réactive pour les détails d'un jeu
const selectedGame = ref(null);

// Fonction pour récupérer les détails d'un jeu spécifique
const loadGameDetails = async (name) => {
    try {
        const response = await axios.get(`/rules/${name}`);
        selectedGame.value = response.data;
    } catch (error) {
        console.error("Erreur lors du chargement des détails du jeu", error);
    }
};
</script>

<template>
    <Head title="Règles des Jeux" />
    <NavBar
        :user="auth.user"
        :can-login="canLogin"
        :can-register="canRegister"
    />

    <div
        class="relative sm:flex min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white p-6"
    >
        <div class="w-full">
            <h1 class="text-3xl font-bold mb-4 text-gray-800 dark:text-white">
                Règles des Jeux
            </h1>

            <!-- Liste des Jeux depuis la base de données -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
                <div
                    v-for="game in games"
                    :key="game.name"
                    class="p-4 border border-gray-300 rounded-md cursor-pointer hover:bg-gray-200 dark:border-gray-600 dark:hover:bg-gray-700"
                    @click="loadGameDetails(game.name)"
                >
                    <h2
                        class="text-2xl font-semibold text-gray-800 dark:text-white"
                    >
                        {{ game.name }}
                    </h2>
                    <p class="text-gray-600 dark:text-gray-400">
                        {{ game.description }}
                    </p>
                </div>
            </div>

            <!-- Détails du Jeu Sélectionné -->
            <div v-if="selectedGame" class="mt-6 px-6 md:px-36">
                <h1
                    class="text-2xl font-bold mb-2 text-gray-900 dark:text-white"
                >
                    {{ selectedGame.name }}
                </h1>
                <h2
                    class="text-lg font-bold mb-4 text-gray-800 dark:text-white"
                >
                    {{ selectedGame.description }}
                </h2>
                <p class="mb-4 text-gray-800 dark:text-gray-400">
                    Intensité : {{ selectedGame.intensity }}
                </p>
                <p class="mb-4 text-gray-800 dark:text-gray-400">
                    Durée : {{ selectedGame.duration }}
                </p>
                <p class="mb-4 text-gray-800 dark:text-gray-400">
                    Nombre de joueurs : {{ selectedGame.min_players }} -
                    {{ selectedGame.max_players }}
                </p>

                <!-- Mise en Place -->
                <div v-if="selectedGame.setup" class="mt-6">
                    <h3
                        class="text-xl font-semibold text-gray-800 dark:text-white mb-2"
                    >
                        Mise en place
                    </h3>
                    <ul>
                        <li
                            v-for="(instruction, index) in selectedGame.setup
                                .instructions"
                            :key="index"
                            class="text-gray-700 dark:text-gray-300"
                        >
                            - {{ instruction }}
                        </li>
                    </ul>
                </div>

                <!-- Déroulement du Jeu -->
                <div v-if="selectedGame.gameplay" class="mt-6">
                    <h3
                        class="text-xl font-semibold text-gray-800 dark:text-white mb-2"
                    >
                        Déroulement du jeu
                    </h3>
                    <ul>
                        <li
                            v-for="(rule, cardType) in selectedGame.gameplay
                                .rules"
                            :key="cardType"
                            class="text-gray-700 dark:text-gray-300"
                        >
                            <strong>{{ cardType }} :</strong> {{ rule }}
                        </li>
                    </ul>
                </div>

                <!-- Règles de Fin de Jeu -->
                <div v-if="selectedGame.end_game" class="mt-6">
                    <h3
                        class="text-xl font-semibold text-gray-800 dark:text-white mb-2"
                    >
                        Fin du jeu
                    </h3>
                    <ul>
                        <li
                            v-for="(rule, condition) in selectedGame.end_game
                                .rules"
                            :key="condition"
                            class="text-gray-700 dark:text-gray-300"
                        >
                            <strong>{{ condition }} :</strong> {{ rule }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>
