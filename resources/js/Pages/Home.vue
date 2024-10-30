<script setup>
import { Head, Link } from "@inertiajs/vue3";
import { ref, onMounted } from "vue"; // Correction : importer ref et onMounted depuis "vue"
import axios from "axios";
import NavBar from "@/Components/NavBar.vue";
import Roulette from "@/Components/Roulette.vue";

defineProps({
    auth: Object,
    canLogin: Boolean,
    canRegister: Boolean,
});

const games = ref([]);

onMounted(async () => {
    const response = await axios.get("/api/games");
    games.value = response.data;
});
</script>

<template>
    <Head title="Accueil" />
    <div
        class="flex flex-col min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white"
    >
        <NavBar
            :user="auth.user"
            :can-login="canLogin"
            :can-register="canRegister"
        />
        <!-- <div
            v-if="canLogin"
            class="sm:fixed sm:top-0 sm:end-0 p-6 text-end z-10"
        >
            <Link
                v-if="$page.props.auth.user"
                :href="route('dashboard')"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                >Dashboard</Link
            >

            <template v-else>
                <Link
                    :href="route('login')"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                    >Log in</Link
                >

                <Link
                    v-if="canRegister"
                    :href="route('register')"
                    class="ms-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                    >Register</Link
                >
            </template>
        </div> -->

        <div
            class="flex flex-col items-center justify-center flex-1 text-center text-gray-800 dark:text-white space-y-4"
        >
            <div class="flex flex-col items-center justify-center space-y-4">
                <h1 class="text-6xl font-bold">DrinkHub</h1>
                <p class="p-4 w-2/3">
                    Bienvenue sur notre plateforme dédiée aux jeux de cartes,
                    Uno et dés revisités pour animer vos soirées ! Ici, vous
                    découvrirez une collection unique de jeux alcoolisés, conçus
                    pour transformer chaque rencontre entre amis en une aventure
                    mémorable. Inspirés par des créations originales et des
                    moments partagés, nos jeux sont parfaits pour ceux qui
                    cherchent à pimenter leurs soirées avec de la stratégie, du
                    suspense et bien sûr, une bonne dose de fun. Lancez-vous
                    dans une expérience ludique inédite, et que le meilleur
                    gagne !
                </p>
            </div>

            <div>
                <Roulette :games="games" />
            </div>
        </div>
    </div>
</template>

<style></style>
