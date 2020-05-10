import wiki_util
import requests
import logging


def find_worst_page_of_list(titlelist, date):
    """Returns title of de-wiki page of titlelist with the least amount of views

    Date must be a str in YYYY-MM-DD format and may at most be 2 months in the past"""
    worst_page = ''
    min_pagehits = float('inf')
    for title in titlelist:
        pagehits = wiki_util.pageviews_of(title, date)
        logging.debug(title + ': ' + str(pagehits))
        if pagehits <= min_pagehits:
            worst_page = title
            min_pagehits = pagehits
    logging.info(worst_page + ': ' + str(min_pagehits))
    if ' ' in worst_page:
        worst_page = worst_page.replace(' ', '_')
    return worst_page


def find_worst_page_of_category(category, date):
    """Returs the title of de-wiki page with least amount of pageviews on date

    Category must be formatted 'Kategorie:category_name'
    Date must be a str in YYYY-MM-DD format and may at most be 2 months in the past"""
    titlelist = wiki_util.pagetitles_of_category(category)
    return find_worst_page_of_list(titlelist, date)
