import requests
import json
import logging
import worstbird


def pageviews_of(title, date):
    """Returns the pageviews of de-wiki page with argument str title at argument str date

    Date must be a str in YYYY-MM-DD format and may at most be 2 months in the past"""
    url = 'https://de.wikipedia.org/w/api.php?action=query&format=json&prop=pageviews&titles=' + title

    query = requests.get(url).json()['query']
    pagehitlist = list(query['pages'].values())
    return pagehitlist[0]['pageviews'][date]


def pagetitles_of_category(category):
    """Returns all list containing all pagetitles of argument str category in de-wiki

    Category must be formatted as 'Kategorie:category_name'"""
    url = 'https://de.wikipedia.org/w/api.php?action=query&&format=json&list=categorymembers&cmprop=title&cmlimit=max&cmtitle=' + category
    query = requests.get(url).json()['query']['categorymembers']
    titlelist = []
    start = 1
    if category == 'Kategorie:Vogel des Jahres (Deutschland)':
        start = 1
    for i in range(start, len(query) - 1):
        titlelist.append(query[i]['title'])
    return titlelist


def image_url(title):
    """Returns main image URL str of the article with the given argument title"""
    api_url = 'https://de.wikipedia.org/w/api.php?action=query&titles=' + \
        title + '&prop=pageimages&format=json&piprop=original'
    j = requests.get(api_url).json()
    image_url = list(j['query']['pages'].values())[0]['original']['source']
    return image_url


def image_filename(title):
    img_url = image_url(title)
    split_url = img_url.split('/')
    return split_url[-1]


def extract(title, sentence_count):
    """Returns first sentence_count sentences from title article in de-wiki_util

    sentence_count must be between 1 and 10"""
    api_url = 'https://de.wikipedia.org/w/api.php?action=query&format=json&titles=' + \
        title + '&prop=extracts&exintro=true&exsentences=' + \
        str(sentence_count)  # + '&explaintext=true&exsectionformat=plain'
    j = requests.get(api_url).json()
    extract = list(j['query']['pages'].values())[0]['extract']
    if '\n' in extract:
        extract = extract.replace('\n', ' ')
    return extract
