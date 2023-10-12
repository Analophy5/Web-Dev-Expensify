const expenseRecords = JSON.parse(localStorage.getItem('expenseRecords')) || [];
const expenseDetailsContainer = document.getElementById('expenseDetails');
if (expenseRecords.length === 0) {
    const noRecordsMessage = document.createElement('p');
    noRecordsMessage.textContent = 'No expense records found.';
    expenseDetailsContainer.appendChild(noRecordsMessage);
} else {
    expenseRecords.forEach((record, index) => {
        const recordBox = document.createElement('div');
        recordBox.classList.add('record-box');

        const recordTitle = document.createElement('h3');
        recordTitle.textContent = `Record ${index + 1}`;

        const detailsParagraph = document.createElement('p');
        detailsParagraph.textContent = record.description;

        const editButton = document.createElement('button');
        editButton.classList.add('edit-button');
        editButton.innerHTML = '<i class="fas fa-edit"></i>';

        const deleteButton = document.createElement('button');
        deleteButton.classList.add('delete-button');
        deleteButton.innerHTML = '<i class="fas fa-trash"></i>';

        recordBox.appendChild(recordTitle);
        recordBox.appendChild(detailsParagraph);
        recordBox.appendChild(editButton);
        recordBox.appendChild(deleteButton);

        expenseDetailsContainer.appendChild(recordBox);
    });
}

const addButton = document.getElementById('addButton');
addButton.addEventListener('click', () => {
    window.location.href = 'add_records.php';}); 