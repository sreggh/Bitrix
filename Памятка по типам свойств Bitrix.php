Bitrix: памятка по типам свойств инфоблока
Для пользовательских типов свойств нужно указывать еще и USER_TYPE.

Привязка к элементам в виде списка:
PROPERTY_TYPE => 'E' 
USER_TYPE => 'EList'


Дата/Время:
PROPERTY_TYPE => 'S' 
USER_TYPE => 'DateTime'


Привязка к элементам по XML_ID:
PROPERTY_TYPE => 'S' 
USER_TYPE => 'ElementXmlID'


Привязка к файлу на сервере:
PROPERTY_TYPE => 'S' 
USER_TYPE => 'FileMan' 
HTML/текст:
PROPERTY_TYPE => 'S' 
USER_TYPE => 'HTML'


Привязка к элементам с автозаполнением:
PROPERTY_TYPE => 'E' 
USER_TYPE => 'EAutocomplete'


Привязка к товарам SKU:
PROPERTY_TYPE => 'E' 
USER_TYPE => 'SKU'


Счетчик:
PROPERTY_TYPE => 'N' 
USER_TYPE => 'Sequence'


Привязка к картам Google Maps:
PROPERTY_TYPE => 'S' 
USER_TYPE => 'map_google'


Привязка к Яндекс.Карте:
PROPERTY_TYPE => 'S' 
USER_TYPE => 'map_yandex'


Видео:
PROPERTY_TYPE => 'S' 
USER_TYPE => 'video'


Привязка к теме форума:
PROPERTY_TYPE => 'S' 
USER_TYPE => 'TopicID'


Привязка к пользователю:
PROPERTY_TYPE => 'S' 
USER_TYPE => 'UserID'