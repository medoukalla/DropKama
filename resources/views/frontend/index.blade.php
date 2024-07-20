@extends('layouts.frontend')

<x-frontend.header />

<x-frontend.game-section />

<x-frontend.payment-methods />

<x-frontend.procedure />

<x-frontend.review-section :testimonials="$testimonials" />

<x-frontend.garantee-section />

<x-frontend.faq-section :faqs="$faqs" />

<x-frontend.shipping-section />
