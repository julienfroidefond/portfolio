---
title: JFR
content:
    items: '@self.modular'
    order:
        by: default
        dir: asc
        custom:
            - _intro
            - _features
            - _video
            - _pricing
            - _testimonials
            - _text
            - _news
            - _contact
menu: Home
googletitle: 'Portfolio de Julien Froidefond'
googledesc: "Passionné par mon métier, je sais mettre en cohérence talent, \r\noutil technologique, savoir faire et personnalité."
twittercardoptions: summary
twittershareimg: site.jpg
twittertitle: 'Julien Froidefond'
twitterdescription: "Passionné par mon métier, je sais mettre en cohérence talent, \r\noutil technologique, savoir faire et personnalité."
articleenabled: false
article:
    '@context': 'http://schema.org/'
    '@type': NewsArticle
    image:
        '@type': ImageObject
    publisher:
        '@type': Organization
        logo:
            '@type': ImageObject
musiceventenabled: false
musicevent:
    '@context': 'http://schema.org/'
    '@type': MusicEvent
    location:
        '@type': MusicVenue
    offers:
        '@type': Offer
        priceCurrency: AED
personenabled: true
person:
    '@context': 'http://schema.org/'
    '@type': person
    name: 'Julien Froidefond'
    jobTitle: 'Front-end architect'
    address:
        '@type': PostalAddress
        addressLocality: '2 rue Winston Churchill'
        addressRegion: 'Villenave d''ornon'
eventenabled: false
event:
    '@context': 'http://schema.org/'
    '@type': Event
    location:
        '@type': Place
musicalbumenabled: false
musicalbum:
    '@context': 'http://schema.org/'
    '@type': MusicAlbum
    byArtist:
        '@type': MusicGroup
restaurantenabled: false
restaurant:
    '@context': 'http://schema.org/'
    '@type': Restaurant
    acceptsReservations: 'yes'
    priceRange: $
    address:
        '@type': PostalAddress
facebookenable: true
facebooktitle: 'Julien Froidefond'
facebookdesc: "Passionné par mon métier, je sais mettre en cohérence talent, \r\noutil technologique, savoir faire et personnalité."
facebookimg: site.jpg
form:
    name: my-nice-form
    action: /home
    fields:
        -
            name: name
            id: name
            label: Name
            classes: 'form-control form-control-lg'
            placeholder: 'Votre nom'
            autocomplete: 'on'
            type: text
            validate:
                required: true
        -
            name: email
            id: email
            classes: 'form-control form-control-lg'
            label: Email
            placeholder: 'Votre email'
            type: text
            validate:
                rule: email
                required: true
        -
            name: message
            label: Message
            classes: 'form-control form-control-lg'
            size: long
            placeholder: 'Un message ?'
            type: textarea
            validate:
                required: true
    buttons:
        -
            type: submit
            value: Envoyer
            class: 'btn btn-primary btn-block'
    process:
        -
            email:
                from: '{{ config.plugins.email.from }}'
                to: ['{{ config.plugins.email.from }}', '{{ form.value.email }}']
                subject: '[Feedback] {{ form.value.name|e }}'
                body: '{% include ''forms/data.html.twig'' %}'
        -
            save:
                fileprefix: feedback-
                dateformat: Ymd-His-u
                extension: txt
                body: '{% include ''forms/data.txt.twig'' %}'
        -
            message: 'Merci pour cet envoi !'
        -
            display: thankyou
onpage_menu: true
---

