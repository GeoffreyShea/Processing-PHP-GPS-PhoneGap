void setup() {
  size(400, 800);
  }

void draw() {
  int [] currentUsers = getGpsUsers();
  println(currentUsers);
}

int[] getGpsUsers() {
  
  int user;
  float myLong;
  float myLat;
  String time;

  int[] currentUsers = {555};  // this is a placeholder so length-1 works, below

  Table table = loadTable("http://192.168.0.13/geo/location_query.php", "header,csv");

  for (TableRow row : table.rows()) {
    user = row.getInt("user");
    myLong = row.getFloat("long");
    myLat = row.getFloat("lat");
    time = row.getString("time");
    if (user != currentUsers[currentUsers.length-1]) {
      currentUsers = append(currentUsers, user);
      println("User: " + user + ", Long: " + myLong + ", Lat: " + myLat + ", Time: " + time);
    }
  }
  return currentUsers;
}
