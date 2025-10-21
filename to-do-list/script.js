// Ambil elemen dari DOM
const taskInput = document.getElementById("task-input");
const addTaskBtn = document.getElementById("add-task");
const taskList = document.getElementById("task-list");

// Ambil data dari localStorage
let tasks = JSON.parse(localStorage.getItem("tasks")) || [];

// Fungsi render daftar tugas
function renderTasks() {
  taskList.innerHTML = "";
  tasks.forEach((task, index) => {
    const li = document.createElement("li");
    li.textContent = task.text;

    if (task.completed) {
      li.classList.add("completed");
    }

    const buttonContainer = document.createElement("div");

    const checkBtn = document.createElement("button");
    checkBtn.innerHTML = "✔️";
    checkBtn.classList.add("check");
    checkBtn.addEventListener("click", () => toggleComplete(index));

    const deleteBtn = document.createElement("button");
    deleteBtn.innerHTML = "🗑️";
    deleteBtn.classList.add("delete");
    deleteBtn.addEventListener("click", () => deleteTask(index));

    buttonContainer.appendChild(checkBtn);
    buttonContainer.appendChild(deleteBtn);

    li.appendChild(buttonContainer);
    taskList.appendChild(li);
  });

  saveToLocalStorage();
}

// Fungsi menambah tugas
function addTask() {
  const text = taskInput.value.trim();
  if (text === "") {
    alert("Tulis sesuatu dulu!");
    return;
  }

  tasks.push({ text, completed: false });
  taskInput.value = "";
  renderTasks();
}

// Fungsi hapus tugas
function deleteTask(index) {
  tasks.splice(index, 1);
  renderTasks();
}

// Fungsi tandai tugas selesai
function toggleComplete(index) {
  tasks[index].completed = !tasks[index].completed;
  renderTasks();
}

// Simpan ke localStorage
function saveToLocalStorage() {
  localStorage.setItem("tasks", JSON.stringify(tasks));
}

// Event listener
addTaskBtn.addEventListener("click", addTask);
taskInput.addEventListener("keypress", (e) => {
  if (e.key === "Enter") addTask();
});

// Render saat pertama kali
renderTasks();
