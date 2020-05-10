import worstbird as wb
import wiki_util as wu
from sys import argv, stdout
from datetime import date, timedelta
import logging


def days_back(amount, format):
    """Return date amount days in the past as str

    format == 0: str of format YYYY-MM-DD
    format == 1: str of format DD.MM.YYYY"""
    yesterday = date.today() - \
        timedelta(
            days=amount)  # day before yesterday because wikipedia-servers don't update fast enough
    if format == 0:
        return yesterday.strftime('%Y-%m-%d')
    elif format == 1:
        return yesterday.strftime('%d.%m.%Y')

# logger setup
logfile = 'backend/log/logfile' + date.today().strftime('%Y-%m-%d') + '.log'
logging.basicConfig(filename=logfile, level=logging.INFO,
                    format='%(asctime)s: %(levelname)s \t %(message)s [%(module)s]')
# logging.getLogger().addHandler(logging.StreamHandler(stdout))

# print(str(argv))
lenargv = len(argv)
prog = -1
cat_or_title = ''
days_amount = 1

if lenargv > 1:
    prog = int(argv[1])
if lenargv > 2:
    cat_or_title = argv[2]
if lenargv > 3:
    days_amount = int(argv[3])
    sentence_count = int(argv[3])

try:
    if prog == 0:
        # get worst bird
        past_date = days_back(days_amount, 0)
        logging.info('Looking in ' + cat_or_title + ' at ' + past_date)
        worst_page_title = wb.find_worst_page_of_category(
            cat_or_title, past_date)
        logging.info('Found worst page ' + worst_page_title)
        print(worst_page_title)
    elif prog == 1:
        # get image url
        image_url = wu.image_url(cat_or_title)
        logging.info('Found image ' + image_url)
        print(image_url)
    elif prog == 2:
        # get extract
        extract = wu.extract(cat_or_title, sentence_count)
        logging.info('Found extract for ' + cat_or_title)
        print(extract)
    elif prog == 3:
        # get date
        if lenargv <= 3:
            days_amount = int(argv[2])
        past_date = days_back(days_amount, 1)
        logging.info('Day returned is ' + past_date)
        print(past_date)
    elif prog == 4:
        # get page views
        past_date = days_back(days_amount, 0)
        pageviews = wu.pageviews_of(cat_or_title, past_date)
        logging.info('Found pageviews ' + str(pageviews))
        print(pageviews)
    elif prog == 5:
        # get img file name
        file_name = wu.image_filename(cat_or_title)
        logging.info('Found filename ' + file_name)
        print(file_name)
    else:
        logging.info('No valid program selected: ' + str(prog))
except KeyError as e:
    logging.warning(str(e) + ': Wrong input')

logging.info('Program' + str(prog) + 'completed')
logging.shutdown()
