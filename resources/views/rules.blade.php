@extends('layouts.app')

@section('title') {{ __('Правила обмена') }}  @endsection

@section('content')
    <div class="static terms">
        <div class="inner">
            <h1>{{ __('Правила обмена') }}</h1>
            <h3>1. {{ __('Общие положения') }}</h3>
            {{ __('Настоящее соглашение описывает правила и условия, на основании
                                которых предоставляются услуги сервиса Well4u.ru и является
                                официальной письменной публичной офертой адресованной
                                физическим лицам (далее по тексту - Пользователь), заключить
                                Соглашение о предоставлении услуг сервисом Well4u.ru на
                                изложенных ниже условиях. Перед тем как воспользоваться
                                услугами сервиса Well4u.ru, Пользователь обязан ознакомиться в
                                полном объеме с условиями «Соглашения о предоставлении услуг
                                сервисом Well4u.ru». Использование услуг сервиса Well4u.ru
                                возможно только в случае, если Пользователь принимает все
                                условия Соглашения. Действующая версия Соглашения расположена
                                для публичного доступа на интернет-сайте сервиса Well4u.ru.') }}
            <p>
                <span>1.1.</span> {{ __('Сервис Well4u.ru (далее - Сервис) – сервис,
                            который предоставляет услуги физическим и юридическим лицам в
                            части обмена, покупки либо продажи электронной валюты. Данные
                            услуги осуществляются посредством специального программного
                            комплекса, доступного по адресу https://Well4u.ru/.') }}<br><br>
                <span>1.2.</span> {{ __('Пользователь – это юридическое / физическое
                            лицо, которое безоговорочно приняло все условия данной оферты и
                            пользуется услугами сервиса Well4u.ru') }}<br><br>
                <span>1.3.</span> {{ __('Платежная система – созданный третьей стороной
                            программный комплекс, посредством которого осуществляется учет
                            цифровых денежных единиц, электронных денег и прочих
                            обязательств, организовывается взаиморасчет пользователей и
                            т.д.') }}<br><br>
                <span>1.4.</span> {{__('Электронные деньги (электронная валюта) – это
                            денежные либо прочие обязательства, которые возникают между
                            лицами, использующими эту валюту, и теми, кто ее создал.
                            Упомянутые обязательства имеют цифровую форму.')}}<br><br>
                <span>1.5.</span> {{__('Операции (платежи) – это осуществление
                            перевода цифровой валюты (электронных денег) со счета
                            отправителя на счет получателя.')}}<br><br>
                <span>1.6.</span> {{ __('Заявка – конкретное намерение посетителя
                            ресурса Well4u.ru воспользоваться его услугами, приняв
                            соответствующие правила данной оферты. Данное намерение
                            выражается в форме предоставления пользователем информации и ее
                            передачи сервису через специальную электронную форму, которая
                            размещена на ресурсе Well4u.ru') }}<br><br>
                <span>1.7.</span> {{ __('Исходная электронная валюта – это та валюта,
                            которая имеется в наличии у пользователя, и которую он хочет
                            обменять либо продать, получив взамен прочую электронную валюту
                            или деньги в иной форме.') }}<br><br>
                <span>1.8.</span> {{ __('Полученная валюта – это та валюта, которую
                            пользователь сервиса Well4u.ru получает в результате
                            проведенного обмена, передавая исходную валюту сервиса.') }}<br><br>
                <span>1.9.</span> {{__('Стороны – это все пользователи, которые
                            безоговорочно приняли указанные в данном соглашении правила и
                            решили воспользоваться услугами сервиса Well4u.ru, а также
                            сам сервис Well4u.ru')}}<br><br>
                <span>1.10.</span> {{ __('Обмен валюты – это совершение операции по
                            обмену электронной валюты различных платежных систем.') }}<br><br>
                <span>1.11.</span> {{ __('Резервы валют – это количество электронных
                            денег, которые сервис Well4u.ru имеет в своем наличии, и в
                            рамках которого пользователи могут осуществлять обменные
                            операции посредством данного сервиса. Актуальную информацию о
                            сумме резервов каждый пользователь может получить, посетив
                            главную страницу данного сервиса') }}<br><br>
                <span>1.12.</span> {{ __('Курс – это соотношение одной электронной
                            валюты по отношению к другой в процессе совершения обмена.') }}
            </p>
            <h3>
                2. {{ __('Предмет соглашения и порядок вступления его в силу') }}
            </h3>
            <p>
                <span>2.1.</span>{{__('Данное соглашение регламентирует отношения между Пользователем и Сервисом по поводу услуг, предоставляемых Сервисом Пользователю и отменяет все предшествующие договоренности между Сервисом и Пользователем по данному предмету.')}}<br><br>
                <span>2.2.</span>{{ __('Данное соглашение не отменяет действующего законодательства стран регистрации и местонахождения Сервиса и Пользователя, а также договорных отношений между Пользователем и Системой (системами) электронных расчетов.') }}<br><br>
                <span>2.3.</span>{{ __('Данное соглашение считается принятым на условиях публичной оферты, акцептуемой Пользователем в ходе подачи им Заявки, являющейся неотъемлемой частью настоящего соглашения.') }}<br><br>
                <span>2.3.1.</span>{{ __('Публичной офертой признается отображаемая Сервисом информация о параметрах и условиях Заявки.') }}<br><br>
                <span>2.3.2.</span> {{__('Акцептом публичной оферты признается совершение Пользователем действий по завершению формирования Заявки, подтверждающих его намерение совершить сделку с Сервисом на условиях, предложенных Сервисом непосредственно перед завершением формирования Заявки. В случае регистрации на Интернет-сайте Сервиса настоящее соглашение вступает в действие в момент проставления галочки перед словами «Я согласен с условиями оферты» и нажатия кнопки «Зарегистрироваться».')}}<br><br>
                <span>2.3.3.</span> {{__('Дата и время акцепта, а также параметры условий Заявки фиксируются Сервисом автоматически в момент завершения формирования Заявки.')}}<br><br>
                <span>2.4.</span> {{__('Данное соглашение вступает в действие с момента завершения формирования Заявки Пользователем.')}}<br><br>
                <span>2.5.</span> {{__('Данное соглашение прекращает свое действие с момента поступления на реквизиты, предоставленные Пользователем, Электронных единиц в сумме, предусмотренной параметрами Заявки Пользователя, либо с момента аннулирования заявки.')}}<br><br>
                <span>2.6.</span> {{__('Стороны признают настоящее соглашение в электронной форме равнозначным по юридической силе договору, заключенному в письменной форме.')}}<br><br>
                <span>2.7.</span> {{__('Сервис оставляет за собой право в одностороннем порядке вносить изменения в данное соглашение без соответствующего уведомления об этом Пользователя, но с обязательной публикацией актуальной версии соглашения на данной странице.')}}<br><br>
            </p>
            <h3>
                3. {{__('Предмет соглашения, стоимость оказываемых услуг')}}
            </h3>
            <p>
                <span>3.1.</span> {{__('Предметом настоящего Соглашения являются услуги обмена, покупки и продажи титульных знаков электронных платежных систем, осуществляемые по заказу Пользователя, а также другие услуги, описанные на веб-сайте Сервиса.')}}<br><br>
                <span>3.2.</span> {{__('Размер вознаграждения Сервиса Well4u.ru за указанные действия отражается в Заявке и подтверждается Пользователем на одной из страниц пользовательского интерфейса.')}}<br><br>
                <span>3.3.</span> {{ __('Стоимость услуг Сервиса Well4u.ru устанавливается руководством Сервиса и публикуется на Интернет-сайте Сервиса.') }}<br><br>
                <span>3.4.</span> {{__('Сервис Well4u.ru вправе самостоятельно изменять курсы обмена Электронных валют и взимаемых комиссионных в любое время в одностороннем порядке, о чем уведомляет Пользователей Сервиса предварительным размещением информации об этих изменениях на Интернет-сайте Сервиса.')}}<br><br>
                <span>3.5.</span>{{__(' В Заявке, создаваемой Пользователем на Интернет-сайте Сервиса, указывается Курс, способ Обмена, а также общая сумма перечисляемых денежных средств или электронной валюты.')}}<br><br>
                <span>3.6.</span> {{ __('Сервис Well4u.ru взимает стоимость своего вознаграждения в момент проведения соответствующей Операции.') }}
            </p>
            <h3>
                4. {{__('Условия предоставления услуг')}}
            </h3>
            <p>
                <span>4.1.</span> {{ __('Заказ услуг Сервисом Well4u.ru осуществляется Пользователем путем направления Заявки через Интернет-сайт Сервиса.') }}<br><br>
                <span>4.2.</span> {{__('Управление процессом обмена или получение информации о ходе выполнения услуги Пользователем производятся при помощи соответствующего пользовательского интерфейса, расположенного на Интернет-сайте Сервиса.')}}<br><br>
                <span>4.3.</span> {{__('Обработка Заявок Пользователя осуществляется Сервисом в строгом соответствии с политикой приватности (пункт 5 настоящего соглашения), а также политикой по противодействию отмыванию денег и предотвращению операций, носящих незаконный характер (пункт 6 настоящего соглашения).')}}<br><br>
                <span>4.4.</span> {{__('Учет операций с электронными единицами производится Сервисом согласно регламенту, правилам и формату соответствующих Систем электронных расчетов.')}}<br><br>
                <span>4.5.</span> {{__('Любая завершенная операция, проведенная Сервисом по Заявке Пользователя, считается неотменяемой, т.е. не может быть отменена Пользователем после ее завершения — получения Пользователем причитающегося ему по ранее акцептованным условиям сделки.')}}<br><br>
                <span>4.6.</span> {{__('В случае непоступления от Пользователя электронных единиц в течение одного часа с момента акцепта Пользователя на реквизиты, предоставленные Сервисом, соглашение на условиях, указанных в Заявке, считается расторгнутым Сервисом в одностороннем порядке как невступившее в действие, без уведомления об этом Пользователя.')}}<br><br>
                <span>4.7.</span> {{__('В случае расторжения соглашения Электронные единицы, поступившие после указанного выше срока, подлежат возврату на реквизиты отправителя в течение последующих 24 часов. При осуществлении возврата все комиссионные расходы на перевод Электронных единиц производятся из поступивших средств за счет Пользователя. Сервис не несет ответственность за возможные задержки при возврате, если они возникли не по вине Сервиса.')}}<br><br>
                <span>4.8.</span> {{__('В случае, если количество поступивших Электронных единиц отличается от заявленного Пользователем, Сервис может в одностороннем порядке расторгнуть соглашение путем отказа от исполнения заявки и возврата поступивших средств на реквизиты отправителя в течение последующих 24 часов. При осуществлении возврата все комиссионные расходы на перевод Электронных единиц производятся из поступивших средств за счет Пользователя. Сервис не несет ответственность за возможные задержки при возврате, если они возникли не по вине Сервиса.')}}<br><br>
                <span>4.12.</span> {{__('Сервис имеет право привлекать для исполнения своих обязательств сторонних исполнителей.')}}<br><br>
                <span>4.14.</span> {{__('Сервис имеет право отказать Пользователю в дальнейшем обслуживании в случае нарушения Пользователем любого из пунктов настоящего соглашения.')}}<br><br>
                <span>4.15.</span> {{__('Все последующие Заявки, созданные Пользователем после отказа Сервисом в дальнейшем обслуживании Пользователя, автоматически замораживаются.')}}<br><br>
                <span>4.16.</span> {{__('Сервис имеет право задержать выполнение транзакции до проведения идентификации личности Пользователя, с помощью звонка по телефону, а также другими способами, не противоречащими действующему законодательству.')}}<br><br>
                <span>4.17.</span> {{__('При пользовании услугами Сервиса Well4u.ru, Пользователь подтверждает, что законно владеет и распоряжается денежными средствами и электронной валютой, участвующими в соответствующем Платеже.')}}<br><br>
                <span>4.18.</span> {{__('Пользователь обязуется самостоятельно исчислять и уплачивать все налоги, требуемые в соответствии с налоговым законодательством места нахождения Пользователя.')}}<br><br>
                <span>4.19.</span> {{__('Особые условия некоторых Платежных систем:')}}<br><br>
                - {{__('при отправлении Пользователем денежных средств в криптовалютах Bitcoin, Litecoin, Ethereum заявка на обмен будет принята на исполнение после двух подтверждений транзакций.')}}<br><br>
                <span>4.20.</span>{{__('операции по отмыванию денежных средств;')}}<br><br>
                - {{__('операции по отмыванию денежных средств;')}}<br>
                - {{__('получение доходов от незаконного оборота наркотиков;')}}<br>
                - {{__('получение доходов от преступной и/или террористической деятельности;')}}<br>
                - {{__('доходов от торговли со странами, торговля с которыми запрещена международными организациями;')}}<br>
                - {{__('дохода от любой другой незаконной деятельности.')}}<br><br>
                <span>4.22.</span> {{__('Сервис вправе расторгнуть соглашение в одностороннем порядке, если клиент нарушил порядок пользование сервисом.')}}<br><br>
                <span>4.22.1.</span> {{__('Наличие в действиях клиента признаков нарушения порядка пользования сервисом определяется по усмотрению сервиса.')}}<br><br>
                <span>4.22.3.</span>
                {{ __('В случае, если количество поступивших Электронных единиц отличается от заявленного
                Пользователем или же оплата была произведена двумя платежами, заявка будет считаться ошибочной, а так же не оплаченной. Возврат средств в данном случае проходит с помощью совершения Идентификационного Платежа (см. пункт Х).
                Переводы на наши реквизиты без создания заявки на обмен, не засчитываются как оплата. Возврат средств вы можете провести связавшись с технической поддержкой нашего сервиса.
                Сервис имеет право задержать выполнение транзакции до проведения идентификации личности
                Пользователя, с помощью Идентификационного Платежа, а так же предоставления информации идентифицирующей Пользователя как собственника адреса либо адресов использовавшихся для совершения обмена.В случае, если количество поступивших
                • Электронных единиц отличается от заявленного
                Пользователем более чем на 1%, Сервис замораживает данную транзакцию в одностороннем порядке. Для возврата средств Пользователю необходимо связаться с технической службой поддержки нашего Сервиса.') }}
                <br><br>
                <span>4.22.4.</span> {{__('В случае если пользователь, проводит операцию, в которой отдает или получает ВТС, он должен учитывать тот факт что любая транзакция в сети ВТС может подтверждаться от 30 минут до суток. Сервис не может повлиять на скорость подтверждения транзакции.')}}<br><br>
                <span>4.22.5.</span> {{__('Реквизиты для оплаты заявок действительны в течение 60 минут, по истечении данного времени переводы не засчитываются и возврату не подлежат.')}}<br><br>
                <span>4.22.6.</span> {{__('Переводы на наши реквизиты без создания заявки на обмен, не засчитываются как оплата и возврату не подлежат.')}}<br><br>
                <span>4.22.7.</span> {{__('В случае если загруженность сети Bitcoin высокая, время обработки заявок в направлении отдачи Bitcoin может быть увеличено до 40 минут. ')}}<br><br>
                <span>4.23</span> {{__('Сервис имеет право запросить любую дополнительную информацию об осуществленной клиентом оплате по заявке, такую как: чек совершенной оплаты по заявке, скриншот транзакции, произведенной в счет оплаты по созданной клиентом заявке, TXID транзакции и т.п.')}}
            </p>
            <h3>
                5. {{__('Политика конфиденциальности')}}
            </h3>
            <p>
                <span>5.1.</span> {{__('Для проведения операций Сервис принимает от Пользователя его персональные данные, которые Сервис обязуется хранить в зашифрованном виде, не придавать огласке, не передавать третьим лицам, за исключением случаев, описанных в п. 5.4, 5.5 и 6.5 настоящего соглашения.')}}<br><br>
                <span>5.2.</span> {{__('Проведение всех операций с Заявками, а также передача персональных данных от Пользователя к Сервису осуществляется по зашифрованному SSL-каналу с длиной ключа 256 бит.')}}<br><br>
                <span>5.3.</span> {{__('Сервис имеет право при необходимости самостоятельно осуществлять деятельность по сбору дополнительных данных о Пользователе любыми доступными способами. Вся информация, собранная в результате такой деятельности не придается огласке, не передается третьим лицам, за исключением случаев, описанных в п. 5.4, 5.5 и 6.5 настоящего соглашения.')}}<br><br>
                <span>5.4.</span> {{__('Сервис имеет право передавать персональные данные Пользователя и детали, совершенных им операций при условии сохранения их конфиденциального статуса по официальному письменному запросу / решению суда / собственной инициативе (в случае возникновения потребности в проведении расследования) правоохранительным органам, а также Пользователю, которому они принадлежат.')}}<br><br>
                <span>5.5.</span> {{__('Сервис имеет право передавать детали операции и относящиеся к операции персональные данные Пользователя по официальному запросу Системы электронных расчетов для проведения внутренних расследований.')}}<br><br>
                <span>5.6.</span> {{__('Все собранные данные о Пользователе, а также детали совершенных им операций хранятся в базе данных Сервиса в течение трех лет с момента выполнения Сервисом последней Заявки Пользователя.')}}
            </p>
            <h3>
                6. {{ __('Политика противодействия отмыванию денег и незаконным операциям') }}
            </h3>
            <p><span>6.1.</span> {{__('В соответствии с международным законодательством Well4u.ru придерживается ряда правил и реализует ряд процедур, направленных на предотвращение использования Сервиса с целью проведения операций по отмыванию денег, то есть действий, нацеленных на возвращение на финансово-экономический рынок денег или иных ценных бумаг незаконного происхождения, представляя их приобретение и владение ими вполне законными и нормальными, а также проведению иных операций, носящих незаконный характер.')}}<br><br>
                <span>6.2.</span> {{__('Для предотвращения операций незаконного характера Сервис устанавливает определенные требования ко всем Заявкам, создаваемым Пользователем:')}}<br><br>
                <span>6.2.1.</span> {{__('Отправителем и получателем Платежа по Заявке должно быть одно и то же лицо. С использованием услуг Сервиса категорически запрещены переводы в пользу третьих лиц.')}}<br><br>
                <span>6.2.2.</span> {{__('Все контактные данные, заносимые Пользователем в Заявку, а также иные персональные данные, передаваемые Пользователем Сервису, должны быть актуальными и полностью достоверными.')}}<br><br>
                <span>6.2.3.</span> {{__('Категорически запрещено создание Заявок Пользователем с использованием анонимных прокси-серверов или каких-либо других анонимных подключений к Интернету.')}}<br><br>
                <span>6.3.</span> {{__('Для предотвращения операций незаконного характера, Сервис:')}}<br><br>
                - {{__('Использует внутреннюю систему автоматизированного анализа транзакций и поведения Пользователя (систему предотвращения мошенничества), останавливающую все подозрительные транзакции Пользователя.')}}<br>
                - {{__('Устанавливает лимиты на операции Пользователя в зависимости от уровня идентификации личности Пользователя и страны его происхождения.')}}<br>
                - {{__('Придерживается политики «Знай своего клиента».')}}<br>
                - {{__('Осуществляет проверку всеми доступными способами всех данных, предоставляемых Пользователем.')}}<br>
                <span>6.4.</span> {{__('Сервис оставляет за собой право заморозить все текущие Заявки Пользователя до момента получения от Пользователя копий документов, удостоверяющих личность Пользователя, а также источник происхождения Электронных единиц и другую информацию, необходимую для проверки производимой операции в следующих случаях:')}}<br><br>
                - {{__('При выявлении нарушения любого из требований, представленных в пункте 6.2 настоящего Соглашения.')}}<br>
                - {{__('При возникновении обоснованных подозрений у администрации Сервиса в том, что пользователь пытается воспользоваться услугами Сервиса для отмывания денег или с целью проведения любых других незаконных операций.')}}<br>
                {{__('В свою очередь, Пользователь обязуется представить запрашиваемый документ в течение 7 рабочих дней с получения запроса на его предоставление, либо запросить аннулирование заявки.')}}<br><br>
                <span>6.4.1.</span> {{__('В случае отказа Пользователя представить запрашиваемые документы Сервис оставляет за собой право отказать Пользователю в дальнейшем обслуживании и предпринять действия, описанные в п. 4.10 настоящего соглашения.')}}<br><br>
                <span>6.5.</span> {{__('Сервис оставляет за собой право отказать Пользователю в дальнейшем обслуживании и предпринять действия, описанные в п. 4.7 настоящего соглашения, после чего передать все имеющиеся у Сервиса данные Пользователя, а также всю имеющуюся информацию об операциях Пользователя в правоохранительные органы в случаях:')}}<br><br>
                -{{__(' Выявления транзакций, целью которых является отмывание денег, финансирование террористических организаций, мошенничество любого рода, а также транзакций, направленных на проведение любых других незаконных и неправомерных операций.')}}<br>
                - {{__('При возникновении обоснованного подозрения у Сервиса в том, что предоставленный Пользователем документ для идентификации личности Пользователя является поддельным или недействительным.')}}<br>
                - {{__('Поступления информации от уполномоченных на то органов о неправомочности владения Пользователем электронными единицами или финансовыми средствами и/или иная информация, делающая невозможным предоставление Сервисом услуг Пользователю.')}}<br>
                - {{__('Выявления любых действий или попытки совершения действий Пользователем, направленных на оказание любого негативного влияния на программно-аппаратный комплекс Сервиса.')}}<br>
                - {{__('Выявления любых действий или попытки совершения действий Пользователем, направленных на хищение баз данных и другого материального и нематериального имущества Сервиса.')}}<br>
                - {{__('Выявления любых действий или попытки совершения действий Пользователем, способных нанести любой физический, материальный и нематериальный вред Сервису.')}}<br><br>
                <span>6.6.</span> {{__('Сервис оставляет за собой право проверять всеми доступными ему способами персональную и любую другую информацию, полученную от Пользователя.')}}
            </p>
            <h3>
                7. {{ __('Ограничение ответственности') }}
            </h3>
            <p><span>7.1.</span> {{__('Сервис не является банком. Сервис предлагает свои услуги круглосуточно, без выходных и будет стремиться к тому, чтобы программно-аппаратный комплекс, реализующий возможности Сервиса, работал без сбоев.')}}<br><br>
                <span>7.2.</span> {{__('Сервис предоставляет свои услуги на условиях «как есть», как они описаны на страницах сайта Сервиса и не предлагает никаких дополнительных гарантий.')}}<br><br>
                <span>7.3.</span> {{__('Используя Сервис, Пользователь соглашается с тем, что объем ответственности Сервиса ограничивается средствами, полученными от Пользователя для исполнения предмета настоящего соглашения, что Сервис не обеспечивает дополнительных гарантий и не несет никакой дополнительной ответственности перед Пользователем, также как и Пользователь не несет дополнительной ответственности перед Сервисом, за исключением случаев, указанных в п. 7.9.')}}<br><br>
                <span>7.4.</span> {{__('Сервис приложит все усилия, но не гарантирует, что его услуги будут доступны круглосуточно, ежедневно. Сервис не несет никакой ответственности за убытки, неполученную прибыль и иные издержки Пользователя, возникшие в результате невозможности получения доступа к сайту и услугам Сервиса.')}}<br><br>
                <span>7.5.</span> {{__('Сервис не несет никакой ответственности за убытки, неполученную прибыль и иные издержки Пользователя, явившиеся результатом задержек, ошибок или сбоев в проведении банковских платежей или электронных переводов.')}}<br><br>
                <span>7.6.</span> {{__('Сервис не несет никакой ответственности за убытки, неполученную прибыль и иные издержки Пользователя, явившиеся результатом ошибочных ожиданий Пользователя в отношении тарифных ставок Сервиса, прибыльности транзакций и иных субъективных факторов.')}}<br><br>
                <span>7.7.</span> {{__('В случае предоставления Пользователем ошибочных данных в информации о реквизитах получателя денежных средств Сервис не несет никакой ответственности за любые неблагоприятные последствия или ущерб, возникшие в результате этой ошибки.')}}<br><br>
                <span>7.8.</span> {{__('Пользуясь услугами Сервиса, Пользователь самостоятельно несет ответственность за выплату налогов в соответствии с налоговым законодательством страны по месту его проживания. Сервис не является налоговым агентом, и не будет уведомлять Пользователя о каких-либо возможных налоговых издержках при использовании услуг Сервиса.')}}<br><br>
                <span>7.9.</span> {{__('Пользователь гарантирует возмещение убытков Сервиса (управляющей компании, руководителей и сотрудников) в случаях предъявления исков или претензий, прямо или косвенно связанных с использованием Пользователем услуг Сервиса, за исключением убытков, вызванных виновными (умышленными или неосторожными) действиями самого Сервиса.')}}<br><br>
                <span>7.10.</span> {{__('Пользователь обязуется воздержаться от использования услуг Сервиса для проведения мошеннических и незаконных операций и соглашается с тем, что любая попытка обмена мошеннического капитала будет иметь судебное преследование по всей строгости закона. Действия Пользователя могут считаться незаконными в соответствии с законодательством страны пребывания Пользователя и/или страны, где зарегистрирован Сервис.')}}<br><br>
                <span>7.11.</span> {{__('Пользователь обязуется не фальсифицировать коммуникационные потоки, связанные с функционированием Сервиса, не вмешиваться в его программную и/или аппаратную часть, а также не оказывать какого-либо иного влияния, способного нарушить нормальную работу Сервиса, понимая, что подобные действия будут иметь судебное преследование по всей строгости закона.')}}<br><br>
                <span>7.12.</span> {{__('В случае обнаружения фальсификации коммуникационных потоков или оказания какого-либо негативного влияния на нормальную работу программного кода Сервиса, имеющего прямое или косвенное отношение к заявке Пользователя, исполнение заявки Сервисом приостанавливается, после чего предпринимаются действия, описанные в п. 6.5 настоящего соглашения.')}}<br><br>
                <span>7.13.</span> {{__('Ни Пользователь, ни Сервис не будут ответственны друг перед другом за задержки или неисполнение своих обязательств, являющихся результатом возникновения обстоятельств непреодолимой силы, включая стихийные бедствия, пожар, наводнение, террористические акты, смены власти, гражданские волнения, а также не функционирования Электронных расчетных систем, систем энергоснабжения, сетей связи и поставщиков Интернет-услуг.')}}<br><br>
                <span>7.14.</span> {{__('Электронные расчетные системы и/или финансовые учреждения несут исключительную ответственность за средства, вверенные им Пользователем. Сервис не может являться стороной в соглашении между Платежной системой и/или финансовым учреждением и Пользователем, и ни в какой мере не несет ответственности за неправильное или неправомочное использование возможностей Электронной расчетной системы Пользователем, а также за злоупотребление Пользователем функциональностью Электронной расчетной системы. Взаимные права и обязанности Пользователя и Электронной расчетной системы и/или финансового учреждения регулируются соответствующими договорами.')}}<br><br>
                <span>7.15.</span> {{__('Пользователь гарантирует, что не является гражданином и налоговым резидентом Соединенных Штатов Америки.')}}<br><br>
                <span>7.16.</span> {{__('Все средства, поступившие в адрес нашего сервиса после трех месяцев, спустя создания заявки поступают в распоряжение сервиса astchange. Сервис в последующем может этими средствами распоряжаться на свое усмотрение.')}}<br><br>
                <span>7.17.</span> {{__('Все средства, поступившие в адрес сервиса Well4u.ru без создания заявок поступает в распоряжения сервиса.')}}<br><br>
                <span>7.18.</span> {{__('Пользователь, указавший неверные реквизиты для осуществления обмена, обязуется предоставить верные реквизиты для совершения обмена в течение трех месяцев с момента создания заявки. В противном случае все средства поступают в распоряжение сервиса Well4u.ru.')}}<br><br>
                <span>7.19.</span> {{ __('В случае поступления суммы от Пользователя, размер которой отличается от указанной в заявке, то сервис "Well4u.ru" может приостановить обмен, а после обращения Пользователя осуществить выплату фактически полученной суммы по курсу, действовавшему на начало операции.') }}<br><br>
                <span>7.20.</span> {{ __('В случае прямых или косвенных действий клиента, сервис несет убытки, клиент обязан возместить нанесенный сервису ущерб в размере 100%. Все текущие и в дальнейшем оплаченные заявки "платежи" переходят в пользование сервиса до момента полного покрытия нанесённого ущерба.') }}<br><br>
                <span>7.21.</span> {{ __('По рекомендации служб безопасности платежных систем, а так же службы безопасности нашего сервиса, во избежание мошеннических действий и нанесения ущерба нашему сервису, обработка заявки клиента может быть приостановлена на срок до 24 часов, после заявка будет исполнена.') }}<br><br>
                <span>7.22</span> {{ __('Средства, отправленные без создания заявки или по ошибке на наши реквизиты возврату не подлежат.') }}
            </p>
            <h3>
                8. {{__('Порядок принятия претензий и разрешения споров')}}
            </h3>
            <p>
                <span>8.1.</span> {{__('Споры и разногласия, возникшие в рамках предоставления услуг Сервисом Пользователю, разрешаются путем переговоров Пользователя с администрацией Сервиса, на основе положений настоящего соглашения.')}}<br><br>
                <span>8.1.1.</span> {{__('Любые претензии по настоящему соглашению могут быть приняты Сервисом в электронном виде путем отправки сообщения по сути претензии на реквизиты (страница контакты), указанные на сайте Сервиса.')}}<br><br>
                <span>8.2.</span> {{__('В случае невозможности разрешения возникающих вопросов путем переговоров, спор разрешается в соответствии с действующим законодательством по месту регистрации Сервиса.')}}
            </p>
            <h3>
                9. {{ __('Заключительные положения') }}
            </h3>
            <p>
                <span>9.1.</span>{{ __('Сервис Well4u.ru вправе отправлять Пользователю на указанный им e-mail информацию о состоянии процесса обмена, а также иную информацию, в том числе рекламного характера.') }}<br><br>
                <span>9.2.</span>{{__('Информация на сайте, включая графические изображения, текстовую информацию, программные коды и т.п. является собственностью сайта Well4u.ru и охраняется законами об авторском праве. Каждый случай несанкционированного копирования (полного или частичного) может преследоваться в рамках действующего законодательства.')}}<br><br>
                <span>9.3.</span>{{ __('Акцепт настоящей оферты означает безусловное согласие Плательщика на обработку Сервисом его персональных данных, предоставляемых Плательщиком Сервисом в целях предоставления услуг, в целях направления Плательщику сообщений информационного и рекламного характера. Акцепт оферты означает согласие Плательщика на совершение Сервисом операций по сбору, систематизации, накапливанию, хранению, уточнению (обновлению, изменению), использованию, распространению (в том числе передаче третьим лицам), обезличиванию, блокированию и уничтожению в отношении его персональных данных, на использование при обработке персональных данных автоматизированного, механического, ручного и любого иного способа по усмотрению Сервиса. Акцепт настоящей оферты также подтверждает безусловное согласие Плательщика с тем, что полнота, достоверность и точность информации, предоставленной Плательщиком, может быть проверена Сервисом, а также представлена Сервисом третьим лицам для целей такой проверки.') }}<br><br>
                <span>9.4.</span>{{ __('Данное согласие может быть в любой момент отозвано Плательщиком путем предоставления Сервису заявления об отзыве согласия на обработку его персональных данных. Настоящее согласие на обработку персональных данных предоставлено на срок, до отзыва Плательщиком согласия на обработку персональных данных.') }}<br><br>
                <span>9.5.</span> {{__('Пользователь подтверждает, что он ознакомился со всеми положениями настоящего Соглашения и, безусловно принимает их, в противном случае Пользователь не может использовать Сервис Well4u.ru.')}}
            </p>
        </div>
    </div>
@endsection
