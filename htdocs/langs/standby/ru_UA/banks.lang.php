<?php
/* Copyright (C) 2012	Regis Houssin	<regis.houssin@capnetworks.com>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

$banks = array(
		'CHARSET' => 'UTF-8',
		'Bank' => 'Банк',
		'Banks' => 'Банки',
		'MenuBankCash' => 'Банк / Наличные',
		'MenuSetupBank' => 'Банк / Денежные установки',
		'BankName' => 'Название банка',
		'FinancialAccount' => 'Счет',
		'FinancialAccounts' => 'Счета',
		'CashAccounts' => 'Денежные счета',
		'MainAccount' => 'Главное внимание',
		'CurrentAccount' => 'Текущий счет',
		'CurrentAccounts' => 'Текущие счета',
		'SavingAccount' => 'Сберегательный счет',
		'SavingAccounts' => 'Сберегательные счета',
		'ErrorBankLabelAlreadyExists' => 'Финансовые этикетке учетная запись уже существует',
		'BankBalance' => 'Баланс',
		'BalanceMinimalAllowed' => 'Минимальный возможный баланс',
		'BalanceMinimalDesired' => 'Минимальный желаемый баланс',
		'RIB' => 'Bank Account Number',
		'IBAN' => 'IBAN номер',
		'BIC' => 'BIC / SWIFT номер',
		'StandingOrders' => 'Регламент',
		'StandingOrder' => 'Постоянное поручение',
		'Withdrawals' => 'Снятие',
		'Withdrawal' => 'Вывод',
		'AccountStatement' => 'Выписка со счета',
		'AccountStatementShort' => 'Заявление',
		'AccountStatements' => 'Выписки по счету',
		'BankAccountOwnerAddress' => 'Адрес Владелец счета',
		'RIBControlError' => 'Проверка целостности значений не удается. Это означает, что информацию для этой учетной записи числа не являются полными или неправильный (проверьте стране, цифры и IBAN).',
		'CreateAccount' => 'Создать учетную запись',
		'NewAccount' => 'Новый',
		'NewBankAccount' => 'Новый банковский счет',
		'NewFinancialAccount' => 'Новые финансовые счета',
		'MenuNewFinancialAccount' => 'Новые финансовые счета',
		'NewCurrentAccount' => 'Новые счета текущих операций',
		'NewSavingAccount' => 'Новый накопительный счет',
		'NewCashAccount' => 'Новые счета наличными',
		'Debts' => 'Долги',
		'LabelBankCashAccount' => 'Банк или наличными этикетке',
		'AccountType' => 'Тип счета',
		'BankType0' => 'Сберегательный счет',
		'BankType1' => 'Текущие или кредитной карты',
		'BankType2' => 'Кассовый счет',
		'IfBankAccount' => 'Если счет в банке',
		'AccountsArea' => 'Счета области',
		'AccountCard' => 'Счет карты',
		'DeleteAccount' => 'Удалить аккаунт',
		'RemoveFromRubrique' => 'Удалить связь с категорией',
		'RemoveFromRubriqueConfirm' => 'Вы уверены, что хотите удалить связь между сделки и категории?',
		'ListBankTransactions' => 'Список банковских операций',
		'IdTransaction' => 'Transaction ID',
		'BankTransactions' => 'Банковские операции',
		'SearchTransaction' => 'Поиск сделку',
		'ListTransactions' => 'Список сделок',
		'ListTransactionsByCategory' => 'Список сделки / категории',
		'TransactionsToConciliate' => 'Сделки примирить',
		'Conciliable' => 'Может быть согласованы',
		'OnlyOpenedAccount' => 'Только открыли счета',
		'AccountToCredit' => 'Счет к кредитам',
		'AccountToDebit' => 'Счет на списание',
		'DisableConciliation' => 'Отключить функцию примирения для этой учетной записи',
		'ConciliationDisabled' => 'Примирение функция отключена',
		'StatusAccountOpened' => 'Открытый',
		'StatusAccountClosed' => 'Закрыто',
		'AccountIdShort' => 'Номер',
		'EditBankRecord' => 'Редактировать запись',
		'LineRecord' => 'Сделка',
		'SupplierInvoicePayment' => 'Поставщик оплаты',
		'WithdrawalPayment' => 'Снятие оплаты',
		'SocialContributionPayment' => 'Социальная выплата вклада',
		'FinancialAccountJournal' => 'Финансовый журнал счета',
		'BankTransfer' => 'Банковский перевод',
		'BankTransfers' => 'Банковские переводы',
		'TransferDesc' => 'Передача с одного счета на другой, Speedealing напишет две записи (дебет счета в источнике и кредит в целевой счет, на ту же сумму. Же этикетки и даты, будут использованы для этой операции)',
		'TransferFrom' => 'От',
		'TransferTo' => 'К',
		'TransferFromToDone' => 'Трансфер из <b>%s</b> к <b>%s</b> из <b>%s</b> %s был записан.',
		'BankChecksToReceipt' => 'Проверка ждет депозита',
		'ShowCheckReceipt' => 'Показать проверить депозита получения',
		'NumberOfCheques' => 'Кол-во проверки',
		'DeleteTransaction' => 'Удалить сделки',
		'ConfirmDeleteTransaction' => 'Вы действительно хотите удалить эту сделку?',
		'ThisWillAlsoDeleteBankRecord' => 'Это приведет к удалению порожденных банковских операций',
		'BankMovements' => 'Движения',
		'CashBudget' => 'Прогноз денежных потоков',
		'PlannedTransactions' => 'Планируемые операции',
		'Graph' => 'Графика',
		'PaymentDateUpdateFailed' => 'Дата оплаты не может быть обновлен',
		'BankTransactionLine' => 'Банковская операция',
		'AllAccounts' => 'Все банковские / денежные счета',
		'BackToAccount' => 'Вернуться к ответственности',
		'ShowAllAccounts' => 'Показать для всех учетных записей',
		'FutureTransaction' => 'Сделки в Futur. Ни в коем случае к согласительной процедуре.',
		'SelectChequeTransactionAndGenerate' => 'Выбор / фильтр проверяет, включать в получении депозита проверки и нажмите кнопку &quot;Создать&quot;.',
);
?>