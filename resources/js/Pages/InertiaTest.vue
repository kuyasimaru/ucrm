<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
Inertiaテスト<br>
<a href="/">aタグ経由</a><br>
<link href="/">読み込まない</link>
<Link href="/">Linkタグ経由</Link><br>
<Link :href="route('inertia.index')">確認</Link><br>
<Link :href="route('inertia.show', { id:50 })">ルートshowテスト</Link>

</template>