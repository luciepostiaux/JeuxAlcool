<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <nav
        class="flex items-center justify-between p-4 bg-gray-800 text-white shadow-md"
    >
        <!-- Nom du Site et Lien vers les Règles -->
        <div class="flex items-center space-x-4">
            <Link :href="route('home')" class="text-2xl font-bold text-white">
                DrinkHub
            </Link>
            <Link
                :href="route('rules.index')"
                class="text-lg font-medium text-white hover:text-gray-300"
            >
                Règles
            </Link>
        </div>

        <!-- Liens de Connexion/Déconnexion et Dashboard -->
        <div class="flex items-center space-x-4">
            <template v-if="$page.props.auth.user">
                <Link
                    :href="route('dashboard')"
                    class="font-semibold hover:text-gray-300"
                >
                    Dashboard
                </Link>
                <Link
                    :href="route('logout')"
                    method="post"
                    as="button"
                    class="font-semibold hover:text-gray-300"
                >
                    Déconnexion
                </Link>
            </template>

            <template v-else>
                <Link
                    v-if="$page.props.canLogin"
                    :href="route('login')"
                    class="font-semibold hover:text-gray-300"
                >
                    Connexion
                </Link>
                <Link
                    v-if="$page.props.canRegister"
                    :href="route('register')"
                    class="font-semibold hover:text-gray-300"
                >
                    Inscription
                </Link>
            </template>
        </div>
    </nav>
</template>
