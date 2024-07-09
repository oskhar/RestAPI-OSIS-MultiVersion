<script setup>
import VerticalNavSectionTitle from "@/@layouts/components/VerticalNavSectionTitle.vue";
import VerticalNavGroup from "@layouts/components/VerticalNavGroup.vue";
import VerticalNavLink from "@layouts/components/VerticalNavLink.vue";
</script>

<template>
  <VerticalNavLink
    :item="{
      title: 'Dashboard',
      to: '/dashboard',
      icon: 'bx-home-smile',
    }"
  />
  <VerticalNavLink
    :item="{
      title: 'Artikel & Edukasi',
      icon: 'bx-book',
      to: '/typography',
    }"
  />
  <VerticalNavLink
    :item="{
      title: 'Manajemen Acara',
      icon: 'bx-news',
      to: '/berita-acara',
    }"
  />
  <VerticalNavLink
    :item="{
      title: 'Galeri OSIS',
      icon: 'bx-image',
      to: '/galeri',
    }"
  />
  <VerticalNavGroup
    :item="{
      title: 'Layanan',
      icon: 'bx-package',
    }"
  >
    <VerticalNavLink
      :item="{
        title: 'Pemilihan Ketua',
        to: '/pemilihan-ketua',
      }"
    />
    <VerticalNavLink
      :item="{
        title: 'Ekstrakurikuler',
      }"
    />
  </VerticalNavGroup>
  <VerticalNavGroup
    :item="{
      title: 'Master Data',
      icon: 'bx-file',
    }"
  >
    <VerticalNavLink
      :item="{
        title: 'Seluruh Angkatan',
      }"
    />
    <VerticalNavLink
      :item="{
        title: 'Keanggotaan OSIS',
      }"
    />
    <VerticalNavLink
      :item="{
        title: 'Akun Siswa',
      }"
    />
  </VerticalNavGroup>
  <VerticalNavLink
    :item="{
      title: 'Pengaturan Akun',
      icon: 'bx-user',
      to: '/account-settings',
    }"
  />
  <VerticalNavLink
    :item="{
      title: 'Tentang',
      icon: 'bx-info-circle',
      to: '/cards',
    }"
  />
</template>
